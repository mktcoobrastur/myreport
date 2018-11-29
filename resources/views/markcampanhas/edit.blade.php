@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($markcampanha, ['route' => ['markcampanhas.update', $markcampanha->id], 'method' => 'patch']) !!}

                        @include('markcampanhas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
        <!--#####################-->


    <div class="alert">
        <form action="http://webdesigner2/sistema/public/uploadMarketing.php" method="post" enctype="multipart/form-data">
    		<label>Anexar arte:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $markcampanha->id !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>
	</div>

    <div class="alert">
		<a href="http://webdesigner2/sistema/public/imgmarketing/{!! $markcampanha->img !!}?c=" target="blank" class="anexos">
			<img width="200" src="http://webdesigner2/sistema/public/imgmarketing/{!! $markcampanha->img !!}" alt="{!! $markcampanha->nome !!}" style="border: 1px solid #cccccc; padding: 2px;" />
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>
    </div>

        <!--#####################-->
       </div>
   </div>
@endsection