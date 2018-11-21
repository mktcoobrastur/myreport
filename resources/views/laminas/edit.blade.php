@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Laminas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($lamina, ['route' => ['laminas.update', $lamina->id], 'method' => 'patch']) !!}

                        @include('laminas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection