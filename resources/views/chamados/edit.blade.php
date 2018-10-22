@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Chamado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($chamado, ['route' => ['chamados.update', $chamado->id], 'method' => 'patch']) !!}

                        @include('chamados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection