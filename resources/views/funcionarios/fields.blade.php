<!-- Setor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('setor', 'Setor:') !!}
    {!! Form::text('setor', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Ramal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ramal', 'Ramal:') !!}
    {!! Form::text('ramal', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Externo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('externo', 'Externo:') !!}
    {!! Form::text('externo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('funcionarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
