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


    <div class="alert" >
        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * FROM atendentes WHERE id = $atendente->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
			<img style="position: absolute; top: 50px; right: 50px; height: 180px; border: 1px solid #ccc;" class="img-circle" width="200" src="<?php echo $_ENV['APP_URL']; ?>imgatendentes/<?php echo $linha['img']; ?>" />
		</a>

	    <?php } ?>
    </div>
