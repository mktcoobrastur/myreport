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
        border-top: 4px solid #3C8CBB;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
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

   <div class="alert">
    <table class="table table-bordered table-striped dataTable" id="metas-table">
    <thead>
        <tr>
        <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Ação</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM tprojetos WHERE departamento = $projeto->id;";
            $query    = mysqli_query($conexao, $query);
            
            echo "<b>Tarefas:</b><br /><br />";
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td>
                <?php if ($linha['prioridade'] == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($linha['prioridade'] == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($linha['prioridade'] == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
            </td>
            <td><?php echo $linha['tarefa']; ?></td>
            <td><?php echo utf8_encode(substr($linha['acao'], 0, 150)); ?>...</td>
            <td>
                <?php if ($linha['status'] == 'E') { echo "EM ESPERA"; } ?>
                <?php if ($linha['status'] == 'A') { echo "EM ANDAMENTO"; } ?>
                <?php if ($linha['status'] == 'F') { echo "FINALIZADO"; } ?>
            </td>
            <td>
            <a href="/tprojetos/<?php echo $linha['id'];?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="/tprojetos/<?php echo $linha['id'];?>/edit" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
            </td>
        </tr>

	    <?php } ?>
    


    </tbody>
</table>
</div>