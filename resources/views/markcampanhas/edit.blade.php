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
        <form action="/uploadMarketing.php" method="post" enctype="multipart/form-data">
    		<label>Anexar arte:</label> <br />
	 		<input type="hidden" name="idChamado" value="{!! $markcampanha->id !!}" />
    	    <input class="form-control" type="file" name="arquivos[]" multiple>
            <br>
            <input type="submit" name="enviaArquivo" value="Enviar">
        </form>
	</div>

    <div class="alert">
		<a href="/imgmarketing/{!! $markcampanha->img !!}" target="blank" class="anexos">
			<img width="200" src="/imgmarketing/{!! $markcampanha->img !!}" style="border: 1px solid #cccccc; padding: 2px;" />
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>
    </div>

        <!--#####################-->
       </div>
   </div>
@endsection