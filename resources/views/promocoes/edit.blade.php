@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Promoções
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($promocoe, ['route' => ['promocoes.update', $promocoe->id], 'method' => 'patch']) !!}

                        @include('promocoes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection