@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dash
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dash, ['route' => ['dashes.update', $dash->id], 'method' => 'patch']) !!}

                        @include('dashes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection