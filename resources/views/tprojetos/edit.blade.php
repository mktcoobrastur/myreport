@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tprojeto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tprojeto, ['route' => ['tprojetos.update', $tprojeto->id], 'method' => 'patch']) !!}

                        @include('tprojetos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection