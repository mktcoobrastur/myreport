<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::text('user', null, ['class' => 'form-control']) !!}
</div>

<!-- Acesso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acesso', 'Acesso:') !!}
    {!! Form::number('acesso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
<<<<<<< HEAD
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('permissoes.index') !!}" class="btn btn-default">Cancel</a>
=======
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('permissoes.index') !!}" class="btn btn-default">Cancelar</a>
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
</div>
