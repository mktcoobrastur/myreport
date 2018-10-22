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
                <?php if ($projeto->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($projeto->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($projeto->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
    </div>
<!-- Status Field -->
<div class="boxStatus">
    {!! Form::label('status', 'Status:') !!}
    <?php if ($projeto->status == 'E') { echo "EM ESPERA"; } ?>
    <?php if ($projeto->status == 'A') { echo "EM ANDAMENTO"; } ?>
    <?php if ($projeto->status == 'F') { echo "FINALIZADO"; } ?>
</div>

<!-- Created At Field -->
<div class="boxStatus">
    {!! Form::label('created_at', 'Criado em:') !!}
    {!! $projeto->created_at !!}
</div>

<!-- Updated At Field -->
<div class="boxStatus">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    {!! $projeto->updated_at !!}
</div><div style="clear: both;"></div>
<!-- Tarefa Field -->
<div class="form-group">
    {!! Form::label('tarefa', 'Projeto:') !!}
    <p>{!! $projeto->tarefa !!}</p>
</div>

<!-- Acao Field -->
<div class="form-group">
    {!! Form::label('acao', 'Acao:') !!}
    <p>{!! nl2br($projeto->acao) !!}</p>
</div>