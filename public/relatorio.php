<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="Description" content="Software de Gestão Coobrastur">
    <link rel="stylesheet" href="http://webdesigner2/sistema/public/i.css">
</head>
<body style="background: #EBEFF4; padding: 20px; text-align: center;">
<div style="width: 80%; margin: 0 auto;">
<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];
    $representante = $_POST['representante'];

    //METAGERAL
    $consultaMeta = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = $dataget AND representante = $representante");
    $metageral = mysqli_fetch_array($consultaMeta);
    //VENDAGERAL
    $consultaVenda = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget AND representante = $representante");
    $vendageral = mysqli_fetch_array($consultaVenda);
    //DIFERENÇA GERAL
    $diferencageral = $vendageral['qnt'] - $metageral['meta'];
    //CONSULTA DIAS DE VENDA 
    $consultaDias = mysqli_query($con, "SELECT * FROM metas WHERE mes = $dataget");
    $diasvenda = mysqli_fetch_array($consultaDias);
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

<div class="box" style="margin-top: 20px;">
    <div class="geralQ">
      <b><?php echo $metageral['meta']; ?></b>
      <span>Meta Geral</span>
    </div>
    <div class="geralQ">
    <b><?php echo $vendageral['qnt']; ?></b>
      <span>Venda Geral</span>
    </div>
    <div class="geralQ">
    <b><?php echo $diferencageral; ?></b>
      <span>Total Diferença</span>
    </div>
    <div class="geralQ">
    <b><?php echo $diasvenda['uteis']; ?></b>
      <span>Dias de Venda</span>
    </div>
</div>

<div style="float: left; width:40%; text-align: center;">
<h4>&nbsp;</h4>

<table class="table" style="font-size: 11px; background: #ffffff;">
  <thead>
    <tr>
      <th scope="col">Representante</th>
      <th scope="col">Qnt</th>
      <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>

<?php
    //CONSULTA PESQUISA
    $consulta = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget AND representante = $representante ORDER BY indice ASC");
    while($l = mysqli_fetch_array($consulta)) {
?>
    <tr>
      <td>
        <?php 

        $nome     =  $_POST['representante'];
        $queryN   = mysqli_query($con, "SELECT * FROM representantes WHERE id = $nome");
        $row      = mysqli_fetch_array($queryN);
        echo $row['nome'];
        ?>
      </td>
      <td>
        <?php echo $l['qnt']; ?>
      </td>
      <td align="right"><a href="#">+ detalhes</a></td>
    </tr>

<?php
    }
?>
  </tbody>
</table>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</div>
</body>
</html>