@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Relatório Vendas</h1>
        <h1 class="pull-right">
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;" href="{!! route('vendasdias.create') !!}">Registro Televenda</a>
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px; margin-right: 5px;" href="{!! route('vendasres.create') !!}">Registro Representantes</a>
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

<div class="form-group">
  <form action="/relatorio.php" method="post" target="blank">
    <label>Por Representante:</label>
    <select name="mes" class="form-control">
<?php
    //Consulta SELECT representantes
    $con = new mysqli("localhost", "root", "", "sistema");
    $consulta = mysqli_query($con, "SELECT * FROM representantes ORDER BY id ASC");
    while ($l = mysqli_fetch_array($consulta)) {
?>
    <option value="<?php echo $l['id']; ?>"><?php echo $l['nome']; ?></option>
<?php
    }
?>
    </select>
    <input type="submit" name="busca" value="Filtrar">
  </form>
  </div>


          </div>
        </div>

        <div class="text-center">
        <a href="javascript:televenda()" class="btn btn-success">Relatório Televenda</a>
        <a href="javascript:representantes()" class="btn btn-success">Relatório Representantes</a>
        <a href="javascript:geral()" class="btn btn-success">Relatório Geral</a>
<script language=javascript type="text/javascript">
  function televenda(){
  varWindow = window.open ('http://localhost/sistema/public/relAtendentes.php', 'popup', "width=800, height=600, left=0, top=0, scrollbars=no ")
  }

  function representantes(){
  varWindow = window.open ('http://localhost/sistema/public/relRepresentantes.php', 'popup', "width=800, height=600, left=0, top=0, scrollbars=no ")
  }

  function geral(){
  varWindow = window.open ('http://localhost/sistema/public/relGeral.php', 'popup', "width=800, height=600, left=0, top=0, scrollbars=no ")
  }
</script>
        </div>

<br />

<div class="divR">Pesquisa detalhada</div>

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


<script type="text/javascript" src="/funcs.js"></script>
<div style="clear: both;"></div>      

    </div>
    </div>

    
@endsection