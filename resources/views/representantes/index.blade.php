@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Representantes</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('representantes.create') !!}">Novo</a>
           <a class="btn btn-warning pull-right" style="margin-top: -10px;margin-bottom: 5px; margin-right: 5px;" href="/zeraAcumulado.php?acao=representantes" onclick="return confirm('Esta opção zera as vendas acumuladas de todos os representantes, porém não interfere no relatório geral!')">Zerar Acumulado</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('representantes.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

