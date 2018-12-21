@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hoteis Diamante
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hoteisdiamante, ['route' => ['hoteisdiamantes.update', $hoteisdiamante->id], 'method' => 'patch']) !!}

                        @include('hoteisdiamantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection