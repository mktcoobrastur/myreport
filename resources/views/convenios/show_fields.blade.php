<!-- Nome Field -->
<div class="form-group">
    <h2>{!! $convenio->nome !!}</h2>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <p>{!! $convenio->img !!}</p>
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
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM tconvenios WHERE departamento = $convenio->id;";
            $query    = mysqli_query($conexao, $query);
            
            echo "<b>Tarefas:</b><br /><br />";
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td><?php echo $linha['prioridade']; ?></td>
            <td><?php echo $linha['tarefa']; ?></td>
            <td><?php echo $linha['acao']; ?></td>
            <td><?php echo $linha['status']; ?></td>
            <td>
            <a href="#" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="#" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
            </td>
        </tr>

	    <?php } ?>
    


    </tbody>
</table>
</div>