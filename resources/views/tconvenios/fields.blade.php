<!-- Prioridade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    {!! Form::select('prioridade', array('A' => 'Alta', 'N' => 'Normal', 'B' => 'Baixa'), 'N', ['class' => 'form-control']) !!}
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
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('E' => 'ESPERA', 'A' => 'EM ANDAMENTO', 'F' => 'FINALIZADO'), 'N', ['class' => 'form-control']) !!}
</div>

<input type="hidden" value="<?php if (isset($_GET['c'])) { echo $_GET['c']; } ?>" name="departamento" />

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="#" class="btn btn-default">Cancelar</a>
</div>
