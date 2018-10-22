@extends('layouts.app')

@section('content')
    <section class="content-header">
    <h1 class="pull-left">
            Convenio
    </h1>
    <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="http://localhost/sistema/public/tconvenios/create?c={!! $convenio->id !!}">Nova Tarefa</a>
    </h1><br />
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('convenios.show_fields')
                    <a href="{!! route('convenios.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection