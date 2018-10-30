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
    .tabelaC {
        float: left;
        width: 212px;
        border: 1px solid #ccc;
        padding: 5px;
        margin: 15px;
        box-shadow: 2px 2px 10px #ccc;
        cursor: pointer;
    }
    .tabelaC img {
        width: 200px;
    }
    .tabelaC img:hover {
        filter:sepia(50%);
    }
    .tabelaC a {
        display: block;
        margin-top: 20px;
        font-family: 'Open Sans';
        font-weight: bold;
        text-align: center;
    }
    .datetime {
        background: #fff;
        width: 200px;
        position: absolute;
        text-align: center;
        font-family: 'Open Sans';
        padding-bottom: 4px;
        color: #666;
    }

</style>

<!-- Convenio Field -->
<div class="boxStatus">
    {!! Form::label('convenio', 'Convenio:') !!}
    {!! $markconveniado->convenio !!}
</div>

<!-- Status Field -->
<div class="boxStatus">
    {!! Form::label('status', 'Status:') !!}
    {!! $markconveniado->status !!}
</div>

<!-- Status Field -->
<div class="boxStatus">
    {!! Form::label('created_at', 'Criado em:') !!}
    {!! $markconveniado->created_at !!}
</div>
<div style="clear: both;"></div>
    <!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $markconveniado->nome !!}</p>
    
    <img width="200"class="" style="position: absolute; right: 50px; top: 50px;" src="/imgmktconv/{!! $markconveniado->img !!}" />

</div>

<!-- Imgprincipal Field -->
<div class="alert" style="width: 200px; float: left;">
        <form name="up1" action="/uploadLogoC.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Imagem:</label> <br />
            <input type="hidden" name="idRedirect" value="{!! $markconveniado->id !!}" />
    	    <input class="" type="file" name="arquivos[]">
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>
	</div>

</div>

<a href="/markcampanhas/create?c={!! $markconveniado->id !!}" class="btn btn-primary">Nova Campanha</a>
<br />
<br />
<h3>Acompanhamento de Campanhas</h3>
<div style="clear: both;"></div><div class="box box-primary">
<?php
            $conveniado = $markconveniado->id;
            $conexao  = mysqli_connect("localhost","root","","sistema");
            //query1
            $query    = "SELECT * FROM markcampanhas WHERE conveniado = '$conveniado'";
            $query    = mysqli_query($conexao, $query);
            while ($linha = mysqli_fetch_array($query)) {
            ?>
                <div class="tabelaC">
                <span class="datetime"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $linha['created_at']; ?></span>
                <img src="<?php echo $linha['img']; ?>" />
                <a href="#"><?php echo utf8_encode(strtoupper($linha['nome'])); ?></a><br />
                </div>
<?php } ?> 
        <br />
</div>
<div style="clear: both;"></div>