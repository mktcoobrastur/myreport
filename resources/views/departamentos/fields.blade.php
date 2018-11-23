<!-- Depto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('depto', 'Departamento') !!}
    {!! Form::text('depto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Breve descrição:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Gerente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gerente', 'Gerente:') !!}
    {!! Form::text('gerente', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('departamentos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
