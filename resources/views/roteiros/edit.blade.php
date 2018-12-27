@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Roteiros
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roteiros, ['route' => ['roteiros.update', $roteiros->id], 'method' => 'patch']) !!}

                        @include('roteiros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection