<!-- Prioridade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    {!! Form::text('prioridade', null, ['class' => 'form-control']) !!}
</div>

<!-- Tarefa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tarefa', 'Tarefa:') !!}
    {!! Form::text('tarefa', null, ['class' => 'form-control']) !!}
</div>

<!-- Acao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('acao', 'Acao:') !!}
    {!! Form::textarea('acao', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<input type="hidden" name="departamento" value="<?php echo $_GET['c']; ?>" />

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tconvenios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
