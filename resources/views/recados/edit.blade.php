@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($recado, ['route' => ['recados.update', $recado->id], 'method' => 'patch']) !!}

                        @include('recados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection