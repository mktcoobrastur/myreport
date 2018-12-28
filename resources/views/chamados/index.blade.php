@extends('layouts.app')

@section('content')

    <section class="content-header">
        
        @include('chamados.topo')

    <div style="float: left; width: 100%;">
        <div class="content-header">
    <b>Pesquisa por Período:</b>
    </div>
    <div class="box box-primary" style="padding: 10px;">
    <form action="<?php echo $_ENV['APP_URL']; ?>filtro-chamados">    
        <span style="display: block; float: left; line-height: 30px;">De: </span> <input type="date" name="de_filtro" class="form-control" style="float: left; width: 250px;">  
        <span style="display: block; float: left; line-height: 30px;">Até: </span> <input type="date" name="ate_filtro" class="form-control" style="float: left; width: 250px;">
        <input type="submit" name="buscar" value="Filtrar" class="btn" >
    </form>
    </div>
    </div>        
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

