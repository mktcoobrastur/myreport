@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hotei
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hotei, ['route' => ['hoteis.update', $hotei->id], 'method' => 'patch']) !!}

                        @include('hoteis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection