<style type="text/css">
    .boxStatus {
        float: left;
        background: #f0f0f0;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        width: 250px;
        height: 50px;
        line-height: 30px;
        border: 1px dashed #c9c9c9;
    }
</style>
<!-- Prioridade Field -->
<div class="boxStatus">
    {!! Form::label('prioridade', 'Prioridade:') !!}
    <?php if ($tconvenio->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
    <?php if ($tconvenio->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
    <?php if ($tconvenio->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
</div>
<!-- Status Field -->
<div class="boxStatus">
    {!! Form::label('status', 'Status:') !!}
    {!! $tconvenio->status !!}
</div>

<!-- Created At Field -->
<div class="boxStatus">
    {!! Form::label('created_at', 'Criado em:') !!}
    {!! $tconvenio->created_at !!}
</div>

<!-- Updated At Field -->
<div class="boxStatus">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
   {!! $tconvenio->updated_at !!}
</div>
    <div style="clear: both;"></div>
<!-- Tarefa Field -->
<div class="form-group">
    {!! Form::label('tarefa', 'Tarefa:') !!}
    <p>{!! $tconvenio->tarefa !!}</p>
</div>

<!-- Acao Field -->
<div class="form-group">
    {!! Form::label('acao', 'Acao:') !!}
    <p>{!! nl2br($tconvenio->acao) !!}</p>
</div>