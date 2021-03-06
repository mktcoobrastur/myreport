<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $marketing->id !!}</p>
</div>

<!-- Prioridade Field -->
<div class="form-group">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    <p>{!! $marketing->prioridade !!}</p>
</div>

<!-- Tarefa Field -->
<div class="form-group">
    {!! Form::label('tarefa', 'Tarefa:') !!}
    <p>{!! $marketing->tarefa !!}</p>
</div>

<!-- Acao Field -->
<div class="form-group">
    {!! Form::label('acao', 'Acao:') !!}
    <p>{!! nl2br($marketing->acao) !!}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{!! $marketing->departamento !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $marketing->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $marketing->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{!! $marketing->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deletado em:') !!}
    <p>{!! $marketing->deleted_at !!}</p>
</div>

