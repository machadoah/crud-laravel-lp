<div class="row mx-auto">

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::text('marca', null, ['class' => 'form-control', 'id' => 'marca', 'placeholder' => 'Digite aqui']) !!}
            {!! Form::label('marca', 'Marca') !!}
        </div>
        @error('marca')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::text('preco', null, ['class' => 'form-control', 'id' => 'preco', 'placeholder' => 'Digite aqui']) !!}
            {!! Form::label('preco', 'Preço (R$)') !!}
        </div>
        @error('preco')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::text('ram', null, ['class' => 'form-control', 'id' => 'ram', 'placeholder' => 'Digite aqui']) !!}
            {!! Form::label('ram', 'RAM (GB)') !!}
        </div>
        @error('ram')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 col-md-6 col-xl-6 mt-3">
        <div class="form-floating">
            {!! Form::text('disco', null, ['class' => 'form-control', 'id' => 'disco', 'placeholder' => 'Digite aqui']) !!}
            {!! Form::label('disco', 'Disco (MB)') !!}
        </div>
        @error('disco')
            <div class="d-block text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group col-12 mt-3">
        {!! Form::submit('Salvar', ['class' => 'form-control btn btn-submit btn-success']) !!}
    </div>

</div>
