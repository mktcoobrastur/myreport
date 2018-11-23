@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vendasdia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vendasdia, ['route' => ['vendasdias.update', $vendasdia->id], 'method' => 'patch']) !!}

                        @include('vendasdias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection