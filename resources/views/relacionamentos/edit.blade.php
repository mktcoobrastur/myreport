@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relacionamentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relacionamentos, ['route' => ['relacionamentos.update', $relacionamentos->id], 'method' => 'patch']) !!}

                        @include('relacionamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection