<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório Televenda</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="Description" content="Software de Gestão Coobrastur">

</head>
<body style="background: #EBEFF4; padding: 20px; text-align: center;">
<div style="width: 80%; margin: 0 auto;">
<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];
    $representante = $_POST['representante'];

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
    $consultaM = mysqli_query($con, "SELECT meta FROM metas WHERE mes = $dataget AND representante = $representante");
    $meta = mysqli_fetch_array($consultaM);

?>
  <div style="width: 100%; height: 120px; background: #165C81; color: #f0f0f0; margin-bottom: 20px; text-align:center; font-family: 'Open Sans'; font-size: 35px; line-height: 120px;">
  Relatório Vendas <?php if($dataget == 1) { echo "Janeiro"; }
                         if($dataget == 2) { echo "Fevereiro"; }
                         if($dataget == 3) { echo "Março"; }
                         if($dataget == 4) { echo "Abril"; }
                         if($dataget == 5) { echo "Maio"; }
                         if($dataget == 6) { echo "Junho"; }
                         if($dataget == 7) { echo "Julho"; }
                         if($dataget == 8) { echo "Agosto"; }
                         if($dataget == 9) { echo "Setembro"; }
                         if($dataget == 10) { echo "Outubro"; }
                         if($dataget == 11) { echo "Novembro"; }
                         if($dataget == 12) { echo "Dezembro"; }
                          ?> - 
                          <?php 
                            $nome     =  $_POST['representante'];
                            $queryN = mysqli_query($con, "SELECT * FROM representantes WHERE id = $nome");
                            $row = mysqli_fetch_array($queryN);
                            echo $row['nome'];
                          ?></div>

<div style="float: left; width:40%; text-align: center;">
<h4>&nbsp;</h4>

<table class="table" style="font-size: 11px; background: #ffffff;">
  <thead>
    <tr>
      <th scope="col">Representante</th>
      <th scope="col">Qnt</th>
    </tr>
  </thead>
  <tbody>

<?php
    //CONSULTA PESQUISA
    $consulta = mysqli_query($con, "SELECT * FROM vendasre WHERE MONTH(indice) = $dataget AND representante = $representante ORDER BY indice ASC");
    while($l = mysqli_fetch_array($consulta)) {
?>
    <tr>
      <td>
        <?php 

        $nome     =  $_POST['representante'];
        $queryN = mysqli_query($con, "SELECT * FROM representantes WHERE id = $nome");
        $row = mysqli_fetch_array($queryN);
        echo $row['nome'];
        ?>
      </td>
      <td>
        <?php echo $l['qnt']; ?>
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
        Total do Mês: <b><?php echo $totalMes['qnt']; ?></b> | Meta: <?php echo $meta['meta']; ?> | Defasagem: <b style="color: red;"> -<?php echo $meta['meta'] - $totalMes['qnt']; ?></b>
    </div>
    <!--div class="alert">
        <span class="btn " style="background: #165C81; color: #fff;">DIAMANTE = <span class="badge badge-light"><?php echo $diamantes; ?></span></span>       
        <span class="btn " style="background: #165C81; color: #fff;">GOLD = <span class="badge badge-light"><?php echo $golds; ?></span></span>       
        <span class="btn " style="background: #165C81; color: #fff;">CONVENCIONAL = <span class="badge badge-light"><?php echo $convencionais; ?></span></span>       
    </div-->
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</div>
</body>
</html>