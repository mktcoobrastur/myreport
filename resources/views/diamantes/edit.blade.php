@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Diamante
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($diamante, ['route' => ['diamantes.update', $diamante->id], 'method' => 'patch']) !!}

                        @include('diamantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection