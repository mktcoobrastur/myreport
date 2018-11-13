<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];
    $consulta = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget");
    $datac = mysqli_fetch_array($consulta)
?>

<div style="width:500px; text-align: center;">
<h4>Vendas do mês <?php echo $dataget; ?></h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Atendente</th>
      <th scope="col">Qnt</th>
      <th scope="col">Plano</th>
    </tr>
  </thead>
  <tbody>

<?php
    while($l = mysqli_fetch_array($consulta)) {
?>
    <tr>
      <th scope="row">#</th>
      <td><?php echo $l['atendente']; ?></td>
      <td><?php echo $l['qnt']; ?></td>
      <td><?php echo $l['plano']; ?></td>
    </tr>

<?php
    }
?>
  </tbody>
</table>
</div>

<?php print_r($datac); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">