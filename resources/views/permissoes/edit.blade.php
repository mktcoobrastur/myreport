@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Permissoes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($permissoes, ['route' => ['permissoes.update', $permissoes->id], 'method' => 'patch']) !!}

                        @include('permissoes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection