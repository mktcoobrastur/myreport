@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Atendente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($atendente, ['route' => ['atendentes.update', $atendente->id], 'method' => 'patch']) !!}

                        @include('atendentes.fields')

                   {!! Form::close() !!}
               </div>
           </div>

<!-- Representante Field -->
<div class="alert" style="width: 250px;">
        <form action="<?php echo $_ENV['APP_URL']; ?>uploadAtendentes.php" method="post" enctype="multipart/form-data">
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
			<img style="position: absolute; top: 90px; right: 50px; height: 180px;" class="img-circle" width="200" src="<?php echo $_ENV['APP_URL']; ?>imgatendentes/<?php echo $linha['img']; ?>" />
		</a>

	    <?php } ?>
    </div>

       </div>
   </div>
@endsection