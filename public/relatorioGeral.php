<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório Geral</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="Description" content="Software de Gestão Coobrastur">
    <link rel="stylesheet" href="/i.css">

</head>
<body style="background: #EBEFF4; padding: 20px; text-align: center;">
<div style="width: 80%; margin: 0 auto;">
<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];

    //METAGERAL
    $consultaMeta = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = $dataget");
    $metageral = mysqli_fetch_array($consultaMeta);
    //VENDAGERAL
    $consultaVenda = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget");
    $vendageral = mysqli_fetch_array($consultaVenda);
    //DIFERENÇA GERAL
    $diferencageral = $vendageral['qnt'] - $metageral['meta'];
    //CONSULTA DIAS DE VENDA 
    $consultaDias = mysqli_query($con, "SELECT * FROM metas WHERE mes = $dataget");
    $diasvenda = mysqli_fetch_array($consultaDias);
    //META Do MÊS
    $consultaM = mysqli_query($con, "SELECT meta FROM metas WHERE mes = $dataget");
    $meta = mysqli_fetch_array($consultaM);

?>
  <div style="width: 100%; height: 120px; background: #165C81; color: #f0f0f0; margin-bottom: 20px; text-align:center; font-family: 'Open Sans'; font-size: 35px; line-height: 120px;">
  Relatório Geral <?php if($dataget == 1) { echo "Janeiro"; }
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
                          ?> 2018</div>
<div style="clear: both;"></div>      

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
    <?php if($diferencageral < 0) { ?>
    <b style='color: #CA090E;'><?php echo $diferencageral; ?></b>
    <?php } ?>
    <?php if($diferencageral > 0) { ?>
    <b style='color: green;'><?php echo $diferencageral; ?></b>
    <?php } ?>
    <span>Total Diferença</span>
    </div>
    <div class="geralQ">
    <b><?php echo $diasvenda['uteis']; ?></b>
      <span>Dias de Venda</span>
    </div>
</div>


<div style="float: left; width:60%; text-align: center;">
<h4>&nbsp;</h4>

<table class="table" style="font-size: 11px; background: #ffffff;">
  <thead>
    <tr style="text-align: center;">
      <th scope="col" style="text-align: left;">Representante</th>
      <th scope="col">Meta Mensal</th>
      <th scope="col">Meta Diária</th>
      <th scope="col">Venda Total</th>
      <th scope="col">Total Defasagem</th>
    </tr>
  </thead>
  <tbody>

<?php
    //CONSULTA PESQUISA
    $consulta = mysqli_query($con, "SELECT * FROM representantes");
    while($l = mysqli_fetch_array($consulta)) {
?>
    <tr style="text-align: center;">
      <td align="left"><?php echo $l['nome']; ?></td>
      <td>
<?php
    //CONSULTA PESQUISA
    $id = $l['id'];
    $consultaD = mysqli_query($con, "SELECT * FROM metas WHERE representante = $id AND mes = $dataget");
    $d = mysqli_fetch_array($consultaD);
?>
      <?php echo $d['meta']; ?>

      </td>

      <td>
        <?php echo round($d['meta'] / $d['uteis']); ?>
      </td>

<?php
    //CONSULTA PESQUISA
    $consultaT = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE representante = $id AND MONTH(indice) = $dataget");
    $t = mysqli_fetch_array($consultaT);
    $resultado =  $t['qnt'] - $d['meta']
?>

      <td>
        <?php echo $t['qnt']; ?>
      </td>

      <?php if($resultado < 0) { ?>
      <td style="color: red;">
        <?php echo $resultado; ?>
      </td>
      <?php } ?>
      <?php if($resultado > 0) { ?>
      <td style="color: green;">
        <?php echo $resultado; ?>
      </td>
      <?php } ?>

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