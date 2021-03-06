@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Info
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($info, ['route' => ['infos.update', $info->id], 'method' => 'patch']) !!}

                        @include('infos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection