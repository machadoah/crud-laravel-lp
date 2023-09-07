<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProdutosController extends Controller
{
    private $produtoModel;
    public function __construct(Produto $produtoModel)
    {
        $this->produtoModel = $produtoModel;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = $this->produtoModel->whereNotNull("produtoId")->orderby('produtoId', 'desc');

        $data = [
            'produtos' => $this->produtoModel->paginate()
        ];

        return view('produtos.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produtos.create");
    }

    public function store(produtoRequest $request)
    {
        $inputs = $request->all();

        $produto = $this->produtoModel->create($inputs);

        if($produto){
            Session::flash('success', 'produto cadastrado com sucesso');
            return redirect()->route('produtos.index');
        }

        Session::flash('fail', 'Houve um erro ao cadastrar o produto.');
        return Redirect::back()->withInput();
    }

    public function show(produto $produto)
    {
        $data = ['produto' => $produto];

        return view('produtos.show', compact('data'));
    }

    public function edit(produto $produto)
    {
        $data = [
            'produto' => $produto
        ];

        return view('produtos.edit', compact('data'));
    }

    public function update(produtoRequest $request, produto $produto)
    {
        $inputs = $request->all();
        if($produto->update($inputs)){
            Session::flash('success', 'produto atualizado com sucesso');
            return redirect()->route('produtos.index');
        }

        Session::flash('fail', 'Houve um erro ao tentar atualizar o produto.');
        return Redirect::back()->withInput();
    }

    public function destroy(produto $produto)
    {
        if($produto->delete()){
            Session::flash('success', 'produto deletado com sucesso');
            return redirect()->route('produtos.index');
        }

        Session::flash('fail', 'Houve um erro ao tentar deletar o produto.');
        return back();
    }
}
