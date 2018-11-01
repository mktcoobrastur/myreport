<style type="text/css">
    .boxStatus {
        float: left;
        background: #f0f0f0;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        width: 250px;
        height: 50px;
        line-height: 25px;
        border-top: 4px solid #3C8CBB;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
    }
</style>
<!-- Prioridade Field -->
<div class="form-group">
    <div class="boxStatus">
        {!! Form::label('prioridade', 'Prioridade:') !!}
                <?php if ($tarefas->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($tarefas->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($tarefas->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
    </div>

    <!-- Departamento Field -->
    <div class="boxStatus">
        {!! Form::label('departamento', 'Departamento:') !!}
        {!! $tarefas->departamento !!}
    </div>

    <!-- Status Field -->
    <div class="boxStatus">
        {!! Form::label('status', 'Status:') !!}
        {!! $tarefas->status !!}
    </div>
    <!-- Created At Field -->
    <div class="boxStatus">
        {!! Form::label('created_at', 'Criado em:') !!}
        {!! $tarefas->created_at !!}
    </div>

    <!-- Updated At Field -->
    <div class="boxStatus">
        {!! Form::label('updated_at', 'Atualizado em:') !!}
        {!! $tarefas->updated_at !!}
    </div>
</div>
<div style="clear: both;"></div>
<!-- Tarefa Field -->
<div class="form-group">
    {!! Form::label('tarefa', 'Tarefa:') !!}
    <h3>{!! $tarefas->tarefa !!}</h3>
</div>

<!-- Acao Field -->
<div class="form-group">
    {!! Form::label('acao', 'Acao:') !!}
    <p>{!! nl2br($tarefas->acao) !!}</p>
</div>

