@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Projeto
        </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="http://localhost/sistema/public/tprojetos/create?c={!! $projeto->id !!}">Nova Tarefa</a>
        </h1>
        <br />
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('projetos.show_fields')
                    <a href="{!! route('projetos.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
