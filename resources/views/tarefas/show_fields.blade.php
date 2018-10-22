<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tarefas->id !!}</p>
</div>

<!-- Prioridade Field -->
<div class="form-group">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    <p>{!! $tarefas->prioridade !!}</p>
</div>

<!-- Tarefa Field -->
<div class="form-group">
    {!! Form::label('tarefa', 'Tarefa:') !!}
    <p>{!! $tarefas->tarefa !!}</p>
</div>

<!-- Acao Field -->
<div class="form-group">
    {!! Form::label('acao', 'Acao:') !!}
    <p>{!! $tarefas->acao !!}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{!! $tarefas->departamento !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $tarefas->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $tarefas->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{!! $tarefas->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deletado em:') !!}
    <p>{!! $tarefas->deleted_at !!}</p>
</div>