<body style="background: #EBEFF4; padding: 20px;">
<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];
    $consulta = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget");
    $datac = mysqli_fetch_array($consulta)
?>

<div style="width:500px; text-align: center;">
<h4>Vendas do mês <?php echo $dataget; ?></h4>

<table class="table" style="font-size: 11px; background: #ffffff;">
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
      <td>
        <?php 
        $atend = $l['atendente'];
        $consulta2 = mysqli_query($con, "SELECT * FROM atendentes WHERE id = $atend");
        $datac = mysqli_fetch_array($consulta2);
        echo $datac['nome'];
        ?>
      </td>
      <td>
        <?php echo $l['qnt']; ?>
      </td>
      <td>
        <?php
            if($l['plano'] == 1) { echo "DIAMANTE"; }
            if($l['plano'] == 2) { echo "GOLD"; }
            if($l['plano'] == 3) { echo "CONVENCIONAL"; }
        ?>
      </td>
    </tr>

<?php
    }
?>
  </tbody>
</table>
</div>

<?php print_r($datac); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</body>