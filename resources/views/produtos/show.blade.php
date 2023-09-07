@extends('template.master')
@section('content')

    <div class="container container-fluid">
        @include('template.error')

        @include('template.grid.back', ['route' => 'produtos.index'])

        <div class="row mx-auto">
            <div class="card bg-dark text-light col-12 col-sm-10 col-md-6 mx-auto">
                <div class="card-title p-3">
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

@endsection
