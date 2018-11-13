<body style="background: #EBEFF4; padding: 20px;">
<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];

    //DIAMANTE
    $consultaD = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget AND plano = 1");
    $diamantes = mysqli_num_rows($consultaD);
    //GOLD
    $consultaG = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget AND plano = 2");
    $golds = mysqli_num_rows($consultaG);
    //CONVENCIONAL
    $consultaC = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget AND plano = 3");
    $convencionais = mysqli_num_rows($consultaC);
    //TOTAL Do MÊS
    $consultaT = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasdia WHERE MONTH(created_at) = $dataget");
    $totalMes = mysqli_fetch_array($consultaT);


    $consulta = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget");
    $datac = mysqli_fetch_array($consulta)
?>

<div style="float: left; width:40%; text-align: center;">
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
<div style="float: left; width: 40%; margin: 38px; background: #fff; font-size: 12px;">
    <div class="alert" style="font-size: 13px;">
        Total do Mês <?php echo $dataget; ?>: <b><?php echo $totalMes['qnt']; ?></b>
    </div>
    <div class="alert">
        <span class="btn " style="background: #165C81; color: #fff;">DIAMANTE = <span class="badge badge-light"><?php echo $diamantes; ?></span></span>       
        <span class="btn " style="background: #165C81; color: #fff;">GOLD = <span class="badge badge-light"><?php echo $golds; ?></span></span>       
        <span class="btn " style="background: #165C81; color: #fff;">CONVENCIONAL = <span class="badge badge-light"><?php echo $convencionais; ?></span></span>       
    </div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</body>