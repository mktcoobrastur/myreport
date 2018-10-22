@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tarefas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tarefas.show_fields')
                    <a href="{!! route('tarefas.index') !!}" class="btn btn-primary">Voltar</a>
                </div>
            </div>

    <style type="text/css">
        .anexos img {
            margin-right: 7px;
        }
        .anexos {
            display: block;
            color: #333 !important;
            font-variant: small-caps;
            text-decoration: none !important;
            height: 35px !important;
            width: 500px;
            background: #f0f0f0;
            padding: 6px !important;
            margin: 5px;
            border-radius: 5px;
        }
        .anexos:hover {
            background: #3C8CBB;
            color: #fff !important;
        }
    </style>


	
   <h3 style='margin-left: 10px;'>Anexos</h3>
    <div class="alert">
        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM anexos WHERE tarefa = $tarefas->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
		<a href="http://localhost/sistema/public/upload/<?php echo $linha['anexo']; ?>" target="blank" class="anexos">
			<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
			<?php echo $linha['anexo']; ?>
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

	    <?php } ?>
    </div>

    <div class="alert">
        <form action="http://localhost/sistema/public/upload.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Arquivos:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $tarefas->id !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>
	</div>


<div class="alert"><h3> Comentários</h3>
</div>

        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM comentarios WHERE tarefa = $tarefas->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
                <div class="alert">
                <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p><?php echo utf8_encode($linha['comentario']); ?></p>
                    <footer class="blockquote-footer"><?php echo $linha['usuario']; ?></cite> <i class="small"><?php echo $linha['created_at']; ?></i></footer>
                    </blockquote>
                </div>
                </div>
                </div>
	    <?php } ?>

</div>

    <div class="alert">
        <form action="http://localhost/sistema/public/comentar.php" method="post" enctype="multipart/form-data">
    		<label>Adicionar comentário:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $tarefas->id !!}" />
	 		<input type="hidden" name="usuario" value="{{ Auth::user()->name}}" />
    	    <textarea name="comentario" class="form-control"></textarea>
            <br>
            <input type="submit" name="enviaArquivo" value="Comentar">
        </form>
	        </div>

    </div>
@endsection
