@extends('layouts.app')

@section('content')

<style type="text/css">
    .pesquisa {
        width: 400px;
    }
@media only screen and (max-width: 1300px) {
    .buscaAtendentes {
        width: 97%;
        margin-top: 15px;
    }
    .pesquisa {
        width: 100%;
    }
}
</style>

    <section class="content-header">
        <h1 class="pull-left">Relatório Vendas</h1>
        <h1 class="pull-right">
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;" href="javascript:newPopup()">Registro Televenda</a>
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px; margin-right: 5px;" href="{!! route('vendasres.create') !!}">Registro Representantes</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="box">
          <div class="alert">

  <div class="form-group pesquisa" style="float: left;">
  <form action="http://webdesigner2/sistema/public/relatorio.php" method="post" target="blank">
    <label>Mensal por representante:</label>
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
    <select name="representante" class="form-control">
<?php
    //Consulta SELECT representantes
    $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
    $consulta = mysqli_query($con, "SELECT * FROM representantes ORDER BY id ASC");
    while ($l = mysqli_fetch_array($consulta)) {
?>
    <option value="<?php echo $l['id']; ?>"><?php echo $l['nome']; ?></option>
<?php
    }
?>
    </select>
    <input type="submit" class="btn btn-primary" name="busca" value="Filtrar" style="margin-top: 2px;">
  </form>
  </div>


  <div class="form-group pesquisa" style="float: left; margin-left: 10px;">
  <form action="http://webdesigner2/sistema/public/relatorioGeral.php" method="post" target="new">
    <label>Mensal Geral:</label>
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
    <input type="submit" class="btn btn-primary" name="busca" value="Gerar Relatório" style="margin-top: 2px;">
  </form>
  </div>

  <div style="clear: both;"></div>

          </div>
        </div>

<br />

<div class="divR">Pesquisa rápida</div>

<div class="buscaAtendentes">
    <strong>Atendentes:</strong><br />
    <input type="text" id="busca" onkeyup="buscarNoticias(this.value)" class="form-control" />
    <div id="resultado"></div>
    <br /><br />
    <div id="conteudo"></div>
</div>

<div class="buscaAtendentes">
    <strong>Representantes:</strong><br />
    <input type="text" id="busca" onkeyup="buscarR(this.value)" class="form-control" />
    <div id="resultadoR"></div>
    <br /><br />
    <div id="conteudoR"></div>
</div>

<div style="clear: both;"></div>      
<script type="text/javascript" src="/funcs.js"></script>
 <div class="box" style="margin-top: 20px;">
    <div class="alert">
        <?php require "charts.php"; ?>
    </div>
</div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="http://webdesigner2/sistema/public/funcs.js"></script>



</div>
    </div>

    
@endsection