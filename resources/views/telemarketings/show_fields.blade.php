<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $telemarketing->id !!}</p>
</div>

<!-- Prioridade Field -->
<div class="form-group">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    <p>{!! $telemarketing->prioridade !!}</p>
</div>

<!-- Tarefa Field -->
<div class="form-group">
    {!! Form::label('tarefa', 'Tarefa:') !!}
    <p>{!! $telemarketing->tarefa !!}</p>
</div>

<!-- Acao Field -->
<div class="form-group">
    {!! Form::label('acao', 'Acao:') !!}
    <p>{!! nl2br($telemarketing->acao) !!}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{!! $telemarketing->departamento !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $telemarketing->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $telemarketing->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{!! $telemarketing->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deletado em:') !!}
    <p>{!! $telemarketing->deleted_at !!}</p>
</div>

