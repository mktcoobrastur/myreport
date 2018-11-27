<?php
    $con = new mysqli("localhost", "root", "", "sistema");
    $consulta1 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 01");
    $janeiro = mysqli_fetch_object($consulta1); $janeiro->qnt;
    
    $consulta2 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 02");
    $fevereiro = mysqli_fetch_object($consulta2); $fevereiro->qnt;

    $consulta3 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 03");
    $marco     = mysqli_fetch_object($consulta3); $marco->qnt;

    $consulta4 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 04");
    $abril     = mysqli_fetch_object($consulta4); $abril->qnt;

    $consulta5 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 05");
    $maio = mysqli_fetch_object($consulta5); $maio->qnt;

    $consulta6 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 06");
    $junho     = mysqli_fetch_object($consulta6); $junho->qnt;

    $consulta7 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 07");
    $julho     = mysqli_fetch_object($consulta7); $julho->qnt;

    $consulta8 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 08");
    $agosto    = mysqli_fetch_object($consulta8); $agosto->qnt;

    $consulta9 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 09");
    $setembro  = mysqli_fetch_object($consulta9); $setembro->qnt;

    $consulta10 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 10");
    $outubro    = mysqli_fetch_object($consulta10); $outubro->qnt;

    $consulta11 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 11");
    $novembro   = mysqli_fetch_object($consulta11); $novembro->qnt;

    $consulta12 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = 12");
    $dezembro       = mysqli_fetch_object($consulta12); $dezembro->qnt;
?>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month',      '1ª Semana', '2ª Semana', '3ª Semana', '4ª Semana', '5ª Semana', 'Desempenho'],
         ['Janeiro',        <?php echo $janeiro->qnt?>,          0,          0,              0,          0,              <?php echo $janeiro->qnt?>],
         ['Fevereiro',      <?php echo $fevereiro->qnt?>,          0,          0,              0,          0,              <?php echo $fevereiro->qnt?>],
         ['Março',          <?php echo $marco->qnt?>,          0,          0,              0,          0,              <?php echo $marco->qnt?>],
         ['Abril',          <?php echo $abril->qnt?>,          0,          0,              0,          0,              <?php echo $abril->qnt?>],
         ['Maio',           <?php echo $maio->qnt?>,          0,          0,              0,          0,              <?php echo $maio->qnt?>],
         ['Junho',          <?php echo $junho->qnt?>,          0,          0,              0,          0,              <?php echo $junho->qnt?>],
         ['Julho',          <?php echo $julho->qnt?>,          0,          0,              0,          0,              <?php echo $julho->qnt?>],
         ['Agosto',         <?php echo $agosto->qnt?>,          0,          0,              0,          0,              <?php echo $agosto->qnt?>],
         ['Setembro',       <?php echo $setembro->qnt?>,          0,          0,              0,          0,              <?php echo $setembro->qnt?>],
         ['Outubro',        <?php echo $outubro->qnt?>,          0,          0,              0,          0,              <?php echo $outubro->qnt?>],
         ['Novembro',       <?php echo $novembro->qnt?>,          0,          0,              0,          0,              <?php echo $novembro->qnt?>],
         ['Dezembro',       <?php echo $dezembro->qnt?>,          0,          0,              0,          0,              <?php echo $dezembro->qnt?>]
      ]);

    var options = {
      title : 'Comparativo Geral de vendas por Mês',
      vAxis: {title: 'Venda Anual'},
      hAxis: {title: 'Mês'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
	

	</script>
    <script src="/js/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div" style="width: 1600px; height: 500px;"></div>

