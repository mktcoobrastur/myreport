@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Indice
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($indice, ['route' => ['indices.update', $indice->id], 'method' => 'patch']) !!}

                        @include('indices.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection