@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Representante
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($representante, ['route' => ['representantes.update', $representante->id], 'method' => 'patch']) !!}

                        @include('representantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection