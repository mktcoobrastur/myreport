@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Negocios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($negocios, ['route' => ['negocios.update', $negocios->id], 'method' => 'patch']) !!}

                        @include('negocios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection