@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Relatório Vendas</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('vendasdias.create') !!}">Novo registro Diário</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="box">
          <div class="alert">

  <div class="form-group">
  <form action="/relatorio.php" method="post" target="blank">
    <label>Por mês:</label>
    <select name="mes" class="form-control">
      <option value="01">Janeiro</option>
      <option value="02">Fevereiro</option>
      <option value="03">Março</option>
      <option value="04">Abril</option>
      <option value="05">Maio</option>
      <option value="06">Junho</option>
      <option value="07">Julho</option>
      <option value="08">Agosto</option>
      <option value="09">Setembro</option>
      <option value="10">Outubro</option>
      <option value="11">Novembro</option>
      <option value="12">Dezembro</option>
    </select>
    <input type="submit" name="busca" value="Filtrar">
  </form>
  </div>



          </div>
        </div>

        <div class="text-center">        
        </div>
    </div>

    
@endsection
