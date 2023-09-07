@extends('template.master')
@section('content')
<div class="container container-fluid">
        @include('template.error')

        @include('template.grid.back', ['route' => 'computadores.list'])

        {!! Form::model($data['computador'], [
            'route'     => ['computadores.update', $data['computador']],
            'method'    => 'PUT',
            'id'        => 'formCadastrar',
            'class'     => 'row mx-auto',
        ]) !!}

        @include('computadores.partials.form')

        {!! Form::close() !!}
    </div>
@endsection
