<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use App\Http\Requests\ComputadorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ComputadorController extends Controller
{
    private $computadorModel;

    public function __construct(Computador $computadorModel)
    {
        $this->computadorModel = $computadorModel;
    }
    public function list()
    {
        $computadores = $this->computadorModel->whereNotNull('computadorId')->orderby('computadorId', 'desc');

        $data = [
            'computadores' => $computadores->paginate(9)
        ];

        return view('computadores.list', compact('data'));
    }

    public function create()
    {
        return view("computadores.create");
    }

    public function store(ComputadorRequest $request)
    {
        $inputs = $request->all();

        $computador = $this->computadorModel->create($inputs);

        if($computador){
            Session::flash('success', 'Computador cadastrado com sucesso');
            return redirect()->route('computadores.list');
        }

        Session::flash('error', 'Houve um erro ao cadastrar o computador.');
        return Redirect::back()->withInput();
    }

    public function show(Computador $computador)
    {
        $data = ['computador' => $computador];

        return view('computadores.show', compact('data'));
    }

    public function edit(Computador $computador)
    {
        $data = [
            'computador' => $computador
        ];

        return view('computadores.edit', compact('data'));
    }

    public function update(ComputadorRequest $request, Computador $computador)
    {
        $inputs = $request->all();
        if($computador->update($inputs)){
            Session::flash('success', 'Computador atualizado com sucesso');
            return redirect()->route('computadores.list');
        }

        Session::flash('error', 'Houve um erro ao tentar atualizar o computador.');
        return Redirect::back()->withInput();
    }

    public function destroy(Computador $computador)
    {
        if($computador->delete()){
            Session::flash('success', 'Computador deletado com sucesso');
            return redirect()->route('computadores.list');
        }

        Session::flash('error', 'Houve um erro ao tentar deletar o computador.');
        return back();
    }
}
