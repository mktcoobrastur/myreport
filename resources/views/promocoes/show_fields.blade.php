<style type="text/css">
    .boxStatus {
        float: left;
        background: #f5f5f5;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        width: 250px;
        height: 50px;
        line-height: 30px;
        border: 1px dashed #c9c9c9;
    }
    .imgPromo {
        float: left;
        width: 400px;
        border: 1px dashed #c9c9c9;
        background: #f5f5f5;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
    }
</style>
<!-- Codigo Field -->
<div class="boxStatus">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! $promocoe->codigo !!}
</div>

<!-- Estado Field -->
<div class="boxStatus">
    {!! Form::label('estado', 'Estado:') !!}
    {!! $promocoe->estado !!}
</div>

<!-- Plano Field -->
<div class="boxStatus">
    {!! Form::label('plano', 'Plano:') !!}
    <?php if ($promocoe->plano == '1') { echo "DIAMANTE"; } ?>
    <?php if ($promocoe->plano == '2') { echo "GOLD"; } ?>
    <?php if ($promocoe->plano == '3') { echo "CONVENCIONAL"; } ?>

</div>

<!-- Created At Field -->
<div class="boxStatus">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $promocoe->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="boxStatus">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{!! $promocoe->updated_at !!}</p>
</div>

    <div style="clear: both;"></div>

<!-- Hotel Field -->
<div class="form-group">
    {!! Form::label('hotel', 'Hotel:') !!}
    <p>{!! $promocoe->hotel !!}</p>
</div>

<!-- Resumo Field -->
<div class="form-group">
    {!! Form::label('resumo', 'Resumo:') !!}
    <p>{!! $promocoe->resumo !!}</p>
</div>

<!-- Imgprincipal Field -->
<div class="imgPromo">
    {!! Form::label('imgPrincipal', 'Imagem Principal:') !!}
    <p>{!! $promocoe->imgPrincipal !!}</p>

        <!--#####################-->


        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM anexos WHERE tarefa = $promocoe->codigo;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
		<a href="http://localhost/sistema/public/promo/<?php echo $linha['anexo']; ?>" target="blank" class="anexos">
			<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
			<?php echo $linha['anexo']; ?>
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

	    <?php } ?>


    <div class="alert">
        <form action="http://localhost/sistema/public/uploadPromo1.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Arquivos:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $promocoe->codigo !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>
	</div>

        <!--#####################-->

</div>

<!-- Imglamina Field -->
<div class="imgPromo">
    {!! Form::label('imgLamina', 'Lâmina:') !!}
    <p>{!! $promocoe->imgLamina !!}</p>

        <!--#####################-->


        <?php
            $varG =  'g'.$promocoe->codigo;
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM anexos WHERE tarefa = '$varG'";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
		<a href="http://localhost/sistema/public/promo/<?php echo $linha['anexo']; ?>" target="blank" class="anexos">
			<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
			<?php echo $linha['anexo']; ?>
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

	    <?php } ?>


    <div class="alert">
        <form action="http://localhost/sistema/public/uploadPromo2.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Arquivos:</label> <br />
	 		<input type="hidden" name="idChamado" value="g{!! $promocoe->codigo !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>
	</div>

        <!--#####################-->

</div>
<div style="clear: both;"></div>