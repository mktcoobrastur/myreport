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
       </div>
   </div>
@endsection