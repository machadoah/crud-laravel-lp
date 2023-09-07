@extends('template.master')
@section('content')
<div class="container container-fluid">
        @include('template.error')

        @include('template.grid.back', ['route' => 'produtos.index'])

        {!! Form::model($data['produto'], [
            'route'     => ['produtos.update', $data['produto']],
            'method'    => 'PUT',
            'id'        => 'formCadastrar',
            'class'     => 'row mx-auto',
        ]) !!}

        @include('produtos.partials.form')

        {!! Form::close() !!}
    </div>
@endsection
