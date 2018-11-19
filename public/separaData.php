<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Atendente</th>
      <th scope="col">Qnt</th>
      <th scope="col">Plano</th>
    </tr>
  </thead>
  <tbody>
<?php
    $con = new mysqli("localhost", "root", "", "sistema");
    $mes = '11';
    // Filtro mês
    $consulta   = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $mes ORDER BY created_at DESC");
    $totalMeta  = $r->meta  * $r->uteis;
    $totalCa    = $l->qnt   * $l->plano;

        if($totalVendas > $totalMeta) {
            $totalVendas = $totalMeta - $totalV;
        }
        while($l = mysqli_fetch_object($consulta)) {

?>
    <tr>
        <th><?php echo date("d/m/Y", strtotime($l->created_at)); ?></th>
        <th><?php echo $l->atendente; ?></th>
        <th><?php echo $l->qnt; ?></th>
        <th><?php echo $l->plano; ?></th>
    </tr>
<?php } ?>   
</tbody>
</table>
