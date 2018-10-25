@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categorias
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($markconvenio, ['route' => ['markconvenios.update', $markconvenio->id], 'method' => 'patch']) !!}

                        @include('markconvenios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection