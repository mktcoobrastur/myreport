@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Destinos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($destinos, ['route' => ['destinos.update', $destinos->id, 'files' => true], 'method' => 'patch']) !!}

                        @include('destinos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection