@extends('layouts.app')

@section('content')
    <section class="content-header">
    @include('chamados.topo')
        <a href="http://localhost/sistema/public/print.php?c={!! $chamado->id !!}" target="blank" class="btn btn-default pull-right">
            <i class="fa fa-print" aria-hidden="true"></i> Imprimir
        </a>
        <h1>
            Chamado <b>#{!! $chamado->id !!}</b>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($chamado, ['route' => ['chamados.update', $chamado->id], 'method' => 'patch']) !!}

                        @include('chamados.fields')

                   {!! Form::close() !!}
                   <div style="width: 400px;">
<!--#####################-->
<div class="alert">
    <h3 style='margin-left: 10px;'>Anexos</h3>
        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $idch     =  'c_'.$chamado->id;
            $query    = "SELECT * FROM anexos WHERE tarefa = '$idch';";
            $query    = mysqli_query($conexao, $query);
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
		<a href="http://localhost/sistema/public/imgchamados/<?php echo $linha['anexo']; ?>" style="text-decoration: none;" target="blank" class="anexos btn btn-primary">
			<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
			<?php echo $linha['anexo']; ?>
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

	    <?php } ?>
    </div>

    <div class="alert">
        <form action="http://localhost/sistema/public/uploadChamados.php" method="post" enctype="multipart/form-data">
    		<label>Enviar Arquivos:</label> <br />
	 		<input type="hidden" name="idChamado" value="c_{!! $chamado->id !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar arquivo">
        </form>
	</div>

        <!--#####################-->
</div>

                </div>
           </div>
       </div>
   </div>
@endsection