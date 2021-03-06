@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vendasre
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vendasre, ['route' => ['vendasres.update', $vendasre->id], 'method' => 'patch']) !!}

                        @include('vendasres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection