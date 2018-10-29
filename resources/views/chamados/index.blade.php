@extends('layouts.app')

@section('content')

    <section class="content-header">
        
        @include('chamados.topo')
        
        <h1 class="pull-left">
            <?php 
                if(isset($_GET['c'])) {
                    if($_GET['c'] == 'aberto') { echo "Chamados Abertos"; }
                    if($_GET['c'] == 'andamento') { echo "Chamados em Andamento"; }
                    if($_GET['c'] == 'pausa') { echo "Chamados em Pausa"; }
                    if($_GET['c'] == 'encerrado') { echo "Chamados Encerrados"; }
                } else {
                    echo "Todos os Chamados";
                }
            ?>
            
        </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('chamados.create') !!}">Novo Chamado</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('chamados.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

