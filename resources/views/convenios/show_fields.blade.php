<!-- Nome Field -->
<div class="form-group">
    <h2>{!! $convenio->nome !!}</h2>
</div>


    <div class="alert" >
        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * FROM convenios WHERE id = $convenio->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
			<img style="position: absolute; top: 30px; right: 50px;" width="150" src="http://webdesigner2/sistema/public/imgconvenios/<?php echo $linha['img']; ?>" />
		</a>

	    <?php } ?>
    </div>

    <!-- Site Field -->
<div class="form-group">
    {!! Form::label('site', 'Site:') !!}
    <p><a href="{!! $convenio->site !!}" target="blank">{!! $convenio->site !!}</a></p>
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
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * FROM tconvenios WHERE departamento = $convenio->id;";
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
            <a href="http://webdesigner2/sistema/public/tconvenios/<?php echo $linha['id'];?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="http://webdesigner2/sistema/public/tconvenios/<?php echo $linha['id'];?>/edit?c={!! $convenio->id !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
            </td>
        </tr>

	    <?php } ?>
    


    </tbody>
</table>
</div>