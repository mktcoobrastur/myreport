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
        border-top: 4px solid #3C8CBB;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
    }
    .imgPromo {
        float: left;
        width: 98%;
        border-top: 4px solid #3C8CBB;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
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

    /*##########  TOOLTIP  ##########*/

 .tooltips {
    display: block;
    position: absolute;
    color: #000;
}

.tooltips .tooltiptext {
    visibility: hidden;
    width: 110px;
    background-color: black;
    color: #fff;
    text-align: center;
    font-size: 10px;
    border-radius: 6px;
    padding: 5px;
    z-index: 1;
    bottom: 100%;
    left: 50%;
    margin: 0;
    
    /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
    opacity: 0;
    transition: opacity 1s;
}

.tooltips:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}

.tooltiptext {
    margin-left: -40px !important;
    top: -25px !important;
    position: relative;
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
    {!! Form::label('galeria', 'Galeria: (MARQUE A FOTO PRINCIPAL)') !!}
    <!--#####################-->
    <div class="alert">
        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * FROM galeria WHERE ref = $foto->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
                $cssP = "position: absolute; margin-top: -80px; margin-left: 50px; font-size: 55px; color: #ffffff; font-weight: bold; text-shadow: 2px 2px 20px #000000;";
        ?>  <div style="float: left; margin: 5px;">
            <a class="linkPrincipal">
                <div class="tooltips">
                    <input type="radio" name="marcar" style="position: absolute; margin-left: 3px;" onclick="window.location='<?php echo $_ENV['APP_URL']; ?>marcaFotos.php?id=<?php echo $linha['id']; ?>&item={!! $foto->id !!}&cod={!! $foto->codigo !!}';" />
                    <span class="tooltiptext">Marcar como Foto Principal</span>
                </div>
               <a href="<?php echo $_ENV['APP_URL']; ?>excluiFotos.php?id=<?php echo $linha['id']; ?>&item={!! $foto->id !!}" onclick="return confirm('Tem certeza?')" class="btn btn-danger excluirBtn" alt="Excluir" data-toggle="tooltip" data-placement="top" title="Excluir">x</a>
                <img width="130" height="90" src="<?php echo $_ENV['APP_URL']; ?>imghoteis/{!! $foto->codigo !!}/<?php echo $linha['img']; ?>" alt="Coobrastur" />
            <?php if($linha['principal'] == 1) { ?><span style="<?php echo $cssP; ?>">P</span><?php } ?>
		    </a></div>
        <?php } ?>

    </div>
    <div style="clear: both;"></div>
        <form action="<?php echo $_ENV['APP_URL']; ?>uploadFotos.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Fotos:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $foto->id !!}" />
	 		<input type="hidden" name="codigo" value="{!! $foto->codigo !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" class="btn btn-primary" value="Enviar">
        </form>


</div>        <!--#####################-->
</div>
<div style="clear: both;"></div>

<?php $next = $foto->id + 1; ?>
<a href="{!!$next!!}" class="btn btn-default">Próximo</a>
