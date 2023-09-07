@extends('template.master')
@section('content')

    <div class="container container-fluid">
        @include('template.error')

        @include('template.grid.create', ['route' => 'computadores.create'])

        <div class="row mx-auto">
            <div class="col-12 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="td-actions" colspan="3">Ações</th>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Preço</th>
                                <th>RAM (GB)</th>
                                <th>Disco (MB)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['computadores'] as $computador)
                                <tr>
                                    <td class="td-action" colspan="1">
                                        @include('template.grid.button', [
                                            'route' => 'computadores.show',
                                            'item' => $computador,
                                            'icon' => 'bi bi-eye-fill',
                                        ])
                                    </td>
                                    <td class="td-action" colspan="1">
                                        @include('template.grid.button', [
                                            'route' => 'computadores.edit',
                                            'item' => $computador,
                                            'icon' => 'bi bi-pencil-square',
                                        ])
                                    </td>
                                    <td class="td-action" colspan="1">
                                        @include('template.grid.delete', [
                                            'route' => 'computadores.delete',
                                            'item' => $computador,
                                            'icon' => 'bi bi-trash-fill',
                                        ])
                                    </td>
                                    <td>{{ $computador->computadorId }}</td>
                                    <td>{{ $computador->marca }}</td>
                                    <td>R$ {{ str_replace('.', ',', $computador->preco) }}</td>
                                    <td>{{ $computador->ram }}GB</td>
                                    <td>{{ $computador->disco }} MB</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 mx-auto">
                {{ $data['computadores']->links() }}
            </div>
        </div>
    </div>

@endsection
