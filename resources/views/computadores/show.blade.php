@extends('template.master')
@section('content')

    <div class="container container-fluid">
        @include('template.error')

        @include('template.grid.back', ['route' => 'computadores.list'])

        <div class="row mx-auto">
            <div class="card bg-dark text-light col-12 col-sm-10 col-md-6 mx-auto">
                <div class="card-title p-3">
                    <h4>{!! $data['computador']->marca !!}</h4>
                </div>
                <div class="card-body">
                    <p>RAM: <b>{!! $data['computador']->ram !!}GB</b></p>
                    <p>Disco: <b>{!! $data['computador']->disco !!}MB</b></p>
                    <p>Preço: <b>R$ {!! str_replace('.', ',', $data['computador']->preco) !!}</b></p>
                </div>
            </div>
        </div>
    </div>

@endsection
