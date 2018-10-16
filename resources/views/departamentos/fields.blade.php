<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Gerente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gerente', 'Gerente:') !!}
    {!! Form::text('gerente', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('A' => 'ATIVO', 'D' => 'DESATIVADO'), ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('departamentos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
