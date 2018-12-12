<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $atendente->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $atendente->nome !!}</p>
</div>

<!-- Representante Field -->
<div class="form-group">
    {!! Form::label('representante', 'Representante:') !!}
    <p>{!! $atendente->representante !!}</p>
</div>

<!-- Representante Field -->
<div class="alert" style="width: 250px;">
        <form action="http://webdesigner2/sistema/public/uploadAtendentes.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Foto:</label>
	 		<input type="hidden" name="idChamado" value="{!! $atendente->id !!}" />
    	    <input type="file" name="arquivos[]" class="form-control">
            <input type="submit" name="enviaArquivo" class="btn" value="Enviar">
        </form>
	</div>

    <div class="alert" >
        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * FROM atendentes WHERE id = $atendente->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
			<img style="position: absolute; top: 50px; right: 50px;" class="img-circle" width="200" src="http://webdesigner2/sistema/public/imgatendentes/<?php echo $linha['img']; ?>" />
		</a>

	    <?php } ?>
    </div>
