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

<div class="box box-primary">
    <div class="box-body">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Comentários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Anexos</a>
        </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
   <br />
 
        <!--#####################-->

<div class="alert"><h3> Comentários</h3>
</div>

        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM comentarios WHERE tarefa = $tarefas->id order by id desc;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
<<<<<<< HEAD
                <div class="alert">
                <div class="card">
=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p><?php echo utf8_encode($linha['comentario']); ?></p>
                    <footer class="blockquote-footer"><?php echo $linha['usuario']; ?></cite> <i class="small"><?php echo $linha['created_at']; ?></i></footer>
                    </blockquote>
                </div>
<<<<<<< HEAD
                </div>
                </div>
=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
	    <?php } ?>



    <div class="alert">
        <form action="/comentar.php" method="post" enctype="multipart/form-data">
<<<<<<< HEAD
    		<label>Adicionar comentário:</label> <br />
=======
    		<label style="color: #999;">Adicionar comentário:</label> <br />
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
	 		<input type="hidden" name="idChamado" value="{!! $tarefas->id !!}" />
	 		<input type="hidden" name="usuario" value="{{ Auth::user()->name}}" />
    	    <textarea name="comentario" class="form-control"></textarea>
            <br>
<<<<<<< HEAD
            <input type="submit" name="enviaArquivo" value="Comentar">
=======
            <input type="submit" name="enviaArquivo" class="btn btn-primary" value="Comentar">
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
        </form>
	</div>

        <!--#####################-->

        <br />
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
   <br />

        <!--#####################-->

 <h3 style='margin-left: 10px;'>Anexos</h3>
    <div class="alert">
        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * FROM anexos WHERE tarefa = $tarefas->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
		<a href="/upload/<?php echo $linha['anexo']; ?>" target="blank" class="anexos">
			<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
			<?php echo $linha['anexo']; ?>
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

	    <?php } ?>
    </div>

    <div class="alert">
        <form action="/upload.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Arquivos:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $tarefas->id !!}" />
<<<<<<< HEAD
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
=======
    	    <input type="file" name="arquivos[]" class="form-control" multiple>
            <br>
            <input type="submit" name="enviaArquivo" class="btn btn-primary" value="Enviar">
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
        </form>
	</div>

        <!--#####################-->

   <br />
  </div>
    </div>
@endsection
