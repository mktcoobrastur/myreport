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
        width: 98%;
        border: 1px dashed #c9c9c9;
        background: #f5f5f5;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
    }
    .linkPrincipal {
        width: 130px !important;
    }
    .excluirBtn {
        position: absolute;
        margin-left: 103px;
        margin-top: 62px;
        width: 25px;
        height: 25px;
        line-height: 7px;
        padding-left: 8px;
        text-decoration: none !important;
    }
</style>

<!-- Codigo Field -->
<div class="boxStatus">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! $foto->codigo !!}
</div>

<!-- Created At Field -->
<div class="boxStatus">
    {!! Form::label('created_at', 'Criado em:') !!}
    {!! $foto->created_at !!}
</div>

<!-- Updated At Field -->
<div class="boxStatus">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    {!! $foto->updated_at !!}
</div>
    <div style="clear: both;"></div>
<!-- Hotel Field -->
<div class="form-group">
    {!! Form::label('hotel', 'Hotel:') !!}
    <p>{!! $foto->hotel !!}</p>
</div>

<!-- Galeria Field -->
<div class="form-group">
<div class="imgPromo">
    {!! Form::label('galeria', 'Galeria: (MARQUE A FOTO DE CAPA)') !!}
    <!--#####################-->
    <div class="alert">
        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM galeria WHERE ref = $foto->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
            <a href="<?php echo $linha['id']; ?>" class="linkPrincipal" data-toggle="tooltip" data-placement="top" title="Marque para Foto Principal">
                <input type="radio" name="p" style="position: absolute; margin-left: 3px;" />
                <a href="#" class="btn btn-danger excluirBtn" alt="Excluir" data-toggle="tooltip" data-placement="top" title="Excluir">x</a>
                <img width="130" height="90" src="http://localhost/sistema/public/hoteis/<?php echo $linha['img']; ?>" />
		    </a>
	    <?php } ?>
    </div>


        <form action="http://localhost/sistema/public/uploadFotos.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Fotos:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $foto->id !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>


</div>        <!--#####################-->

</div>
<div style="clear: both;"></div>