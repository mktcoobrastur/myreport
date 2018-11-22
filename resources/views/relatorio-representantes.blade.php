@extends('layouts.app')

@section('content')
<style type="text/css">
.mesCs {
    display: block;
    background: #3C8DBB;
    color: #fff;
    padding: 5px;
    font-size: 20px;
}
</style>
<section class="content-header">
      <h1>
        Relatório Televenda
        <small>coobrastur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Televenda</a></li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="box">
    <div class="alert">
<?php
for ($i=1; $i < 12; $i++) {
    if($i == 1) { echo "<h2 class='mesCs'>Janeiro</h2>"; }
    if($i == 2) { echo "<h2 class='mesCs'>Fevereiro</h2>"; }
    if($i == 3) { echo "<h2 class='mesCs'>Março</h2>"; }
    if($i == 4) { echo "<h2 class='mesCs'>Abril</h2>"; }
    if($i == 5) { echo "<h2 class='mesCs'>Maio</h2>"; }
    if($i == 6) { echo "<h2 class='mesCs'>Junho</h2>"; }
    if($i == 7) { echo "<h2 class='mesCs'>Julho</h2>"; }
    if($i == 8) { echo "<h2 class='mesCs'>Agosto</h2>"; }
    if($i == 9) { echo "<h2 class='mesCs'>Setembro</h2>"; }
    if($i == 10) { echo "<h2 class='mesCs'>Outubro</h2>"; }
    if($i == 11) { echo "<h2 class='mesCs'>Novembro</h2>"; }
    if($i == 12) { echo "<h2 class='mesCs'>Dezembro</h2>"; }
?>
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col" width="33%">Data</th>
      <th scope="col">Representante</th>
      <th scope="col" width="20%">Qnt</th>
    </tr>
  </thead>
  <tbody>  

<?php
    $qntLinhas = 12;
    $con = new mysqli("localhost", "root", "", "sistema");
    $consulta = mysqli_query($con, "SELECT * FROM vendasre WHERE MONTH(indice) = $i ORDER BY indice ASC");
    while ($l = mysqli_fetch_object($consulta)) {
?>
    <tr>
        <th><?php echo date("d/m/Y", strtotime($l->indice)); ?></th>
        <th>
            <?php
        $repr = $l->representante;
        $consulta2 = mysqli_query($con, "SELECT * FROM representantes WHERE id = $repr");
        $datac = mysqli_fetch_array($consulta2);
            echo $datac['nome'];
        ?>
        </th>
        <th><?php echo $l->qnt; ?></th>
    </tr>
<?php } ?>


</tbody>
</table>

<?php
}
?>
    </div>
</div>
</section>
    <!-- /.content -->

@endsection