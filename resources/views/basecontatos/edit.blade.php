@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Basecontato
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($basecontato, ['route' => ['basecontatos.update', $basecontato->id], 'method' => 'patch']) !!}

                        @include('basecontatos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection