@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Parceiros
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($parceiros, ['route' => ['parceiros.update', $parceiros->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('parceiros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection