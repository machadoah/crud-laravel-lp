@extends('template.master')
@section('content')

    <div class="container container-fluid">
        @include('template.error')

        @include('template.grid.create', ['route' => 'produtos.create'])

        <div class="row mx-auto">
            <div class="col-12 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="td-actions" colspan="3">Ações</th>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th>Custo de Produção</th>
                                <th>Unidade de medida</th>
                                <th>Quantidade em Estoque</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['produtos'] as $produto)
                                <tr>
                                    <td class="td-action" colspan="1">
                                        @include('template.grid.button', [
                                            'route' => 'produtos.show',
                                            'item' => $produto,
                                            'icon' => 'bi bi-eye-fill',
                                        ])
                                    </td>
                                    <td class="td-action" colspan="1">
                                        @include('template.grid.button', [
                                            'route' => 'produtos.edit',
                                            'item' => $produto,
                                            'icon' => 'bi bi-pencil-square',
                                        ])
                                    </td>
                                    <td class="td-action" colspan="1">
                                        @include('template.grid.delete', [
                                            'route' => 'produtos.destroy',
                                            'item' => $produto,
                                            'icon' => 'bi bi-trash-fill',
                                        ])
                                    </td>
                                    <td class="text-right">{{ $produto->produtoId }}</td>
                                    <td>{{ $produto->codigo }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>R$ {{ str_replace('.', ',', $produto->custoProducao) }}</td>
                                    <td>{{ $produto->unidade }}</td>
                                    <td>{{ str_replace('.', ',', $produto->quantidadeEstoque) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 mx-auto">
                {{ $data['produtos']->links() }}
            </div>
        </div>
    </div>

@endsection
