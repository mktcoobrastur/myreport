<body style="background: #EBEFF4; padding: 20px; text-align: center;">
<div style="width: 80%; margin: 0 auto;">
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
    //META Do MÊS
    $consultaM = mysqli_query($con, "SELECT meta FROM metas WHERE mes = $dataget");
    $meta = mysqli_fetch_array($consultaM);

?>
  <div style="width: 100%; height: 120px; background: #165C81; color: #f0f0f0; margin-bottom: 20px; text-align:center; font-family: 'Open Sans'; font-size: 35px; line-height: 120px;">
  Relatório Televenda mês <span style="text-decoration: underline;"><?php echo $dataget; ?><span></div>

<div style="float: left; width:40%; text-align: center;">
<h4>&nbsp;</h4>

<table class="table" style="font-size: 11px; background: #ffffff;">
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
    //CONSULTA PESQUISA
    $consulta = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $dataget ORDER BY created_at ASC");
    while($l = mysqli_fetch_array($consulta)) {
?>
    <tr>
      <th scope="row"><?php echo date("d/m/Y", strtotime($l['created_at'])); ?></th>
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
<div style="float: left; width: 40%; margin: 38px; background: #fff; font-size: 14px; font-family: 'Open Sans';">
    <div class="alert" style="font-size: 13px;">
        Total do Mês: <b><?php echo $totalMes['qnt']; ?></b> | Meta: <?php echo $meta['meta']; ?> | <b style="color: red;"> -<?php echo $meta['meta'] - $totalMes['qnt']; ?></b>
    </div>
    <div class="alert">
        <span class="btn " style="background: #165C81; color: #fff;">DIAMANTE = <span class="badge badge-light"><?php echo $diamantes; ?></span></span>       
        <span class="btn " style="background: #165C81; color: #fff;">GOLD = <span class="badge badge-light"><?php echo $golds; ?></span></span>       
        <span class="btn " style="background: #165C81; color: #fff;">CONVENCIONAL = <span class="badge badge-light"><?php echo $convencionais; ?></span></span>       
    </div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</div>
</body>