<div class="row mx-auto">

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo', 'placeholder' => 'Digite aqui']) !!}
            {!! Form::label('codigo', 'Código') !!}
        </div>
        @error('codigo')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::number('custoProducao', null, ['class' => 'form-control', 'id' => 'custoProducao', 'placeholder' => 'Digite aqui', 'step' => '.01']) !!}
            {!! Form::label('custoProducao', 'Custo Producao') !!}
        </div>
        @error('custoProducao')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 col-md-6 col-xl-12 mt-3">
        <div class="form-floating">
            {!! Form::textarea('descricao', null, ['class' => 'form-control', 'id' => 'descricao', 'placeholder' => 'Digite aqui', 'style' => 'min-height:100px;']) !!}
            {!! Form::label('descricao', 'Descrição') !!}
        </div>
        @error('descricao')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::text('unidade', null, ['class' => 'form-control', 'id' => 'unidade', 'placeholder' => 'Digite aqui', 'maxlength' => "2"]) !!}
            {!! Form::label('unidade', 'Unidade de Medida (un, kg, m)') !!}
        </div>
        @error('unidade')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::number('quantidadeEstoque', null, ['class' => 'form-control', 'id' => 'quantidadeEstoque', 'placeholder' => 'Digite aqui', 'step' => '.01']) !!}
            {!! Form::label('quantidadeEstoque', 'Quantidade em Estoque') !!}
        </div>
        @error('quantidadeEstoque')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 mt-3">
        {!! Form::submit('Salvar', ['class' => 'form-control btn btn-submit btn-success']) !!}
    </div>

</div>
