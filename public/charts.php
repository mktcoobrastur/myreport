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

    //METAS

    $consultam1 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 1");
    $mjan = mysqli_fetch_object($consultam1); $mjan->meta;

    $consultam2 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 2");
    $mfev = mysqli_fetch_object($consultam2); $mfev->meta;

    $consultam3 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 3");
    $mmar = mysqli_fetch_object($consultam3); $mmar->meta;

    $consultam4 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 4");
    $mabr = mysqli_fetch_object($consultam4); $mabr->meta;

    $consultam5 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 5");
    $mmai = mysqli_fetch_object($consultam5); $mmai->meta;

    $consultam6 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 6");
    $mjun = mysqli_fetch_object($consultam6); $mjun->meta;

    $consultam7 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 7");
    $mjul = mysqli_fetch_object($consultam7); $mjul->meta;

    $consultam8 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 8");
    $mago = mysqli_fetch_object($consultam8); $mago->meta;

    $consultam9 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 9");
    $mset = mysqli_fetch_object($consultam9); $mset->meta;

    $consultam10 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 10");
    $mout = mysqli_fetch_object($consultam10); $mout->meta;

    $consultam11 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 11");
    $mnov = mysqli_fetch_object($consultam11); $mnov->meta;

    $consultam12 = mysqli_query($con, "SELECT SUM(meta) meta FROM metas WHERE mes = 12");
    $mdez = mysqli_fetch_object($consultam12); $mdez->meta;
?>
    <script src="http://webdesigner2/sistema/public/js/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

            <div style="width: 100%; height: 50px; float: left;"></div>
                <!-- Bar Chart -->
                <div class="" style="float: left; width: 99%; background: #fff;margin: 5px; border-radius: 10px;">
                    <div class="card">
                        <div class="body">
                            <canvas id="bar_chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div>

            <div style="width: 100%; height: 50px; float: left;"></div>
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="" style="float:left; width: 99%; background: #fff; border-radius: 10px;">
                    <div class="card">
                        <div class="body">
                            <canvas id="line_chart" height="70"></canvas>
                        </div>
                    </div>
              </div>
              <!-- #END# Line Chart -->

<script src="http://webdesigner2/sistema/public/lib/jquery.knob.js"></script>

    <script src="http://webdesigner2/sistema/public/lib/jquery.min.js"></script>
    <script src="http://webdesigner2/sistema/public/lib/Chart.bundle.js"></script>


<script type="text/javascript">

$(function () {
    new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
    new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
});

function getChartJs(type) {
    var config = null;

    if (type === 'line') {
        config = {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                datasets: [{
                    label: "Total",
                    data: [ <?php echo $janeiro->qnt?>, 
                            <?php echo $fevereiro->qnt?>,
                            <?php echo $marco->qnt?>, 
                            <?php echo $abril->qnt?>, 
                            <?php echo $maio->qnt?>, 
                            <?php echo $junho->qnt?>, 
                            <?php echo $julho->qnt?>,
                            <?php echo $agosto->qnt?>,
                            <?php echo $setembro->qnt?>,
                            <?php echo $outubro->qnt?>,
                            <?php echo $novembro->qnt?>,
                            <?php echo $dezembro->qnt?>],
                    borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 188, 212, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                    pointBorderWidth: 1
                }, {
                        label: "Meta",
                        data: [ <?php echo $mjan->meta; ?>, 
                                <?php echo $mfev->meta; ?>, 
                                <?php echo $mmar->meta; ?>, 
                                <?php echo $mabr->meta; ?>, 
                                <?php echo $mmai->meta; ?>, 
                                <?php echo $mjun->meta; ?>, 
                                <?php echo $mjul->meta; ?>,
                                <?php echo $mago->meta; ?>,
                                <?php echo $mset->meta; ?>,
                                <?php echo $mout->meta; ?>,
                                <?php echo $mnov->meta; ?>,
                                <?php echo $mdez->meta; ?>],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                datasets: [{
                    label: "Total",
                    data: [ <?php echo $janeiro->qnt?>, 
                            <?php echo $fevereiro->qnt?>,
                            <?php echo $marco->qnt?>, 
                            <?php echo $abril->qnt?>, 
                            <?php echo $maio->qnt?>, 
                            <?php echo $junho->qnt?>, 
                            <?php echo $julho->qnt?>,
                            <?php echo $agosto->qnt?>,
                            <?php echo $setembro->qnt?>,
                            <?php echo $outubro->qnt?>,
                            <?php echo $novembro->qnt?>,
                            <?php echo $dezembro->qnt?>],
                    backgroundColor: 'rgba(0, 188, 212, 0.8)'
                }, {
                        label: "Meta",
                        data: [ <?php echo $mjan->meta; ?>, 
                                <?php echo $mfev->meta; ?>, 
                                <?php echo $mmar->meta; ?>, 
                                <?php echo $mabr->meta; ?>, 
                                <?php echo $mmai->meta; ?>, 
                                <?php echo $mjun->meta; ?>, 
                                <?php echo $mjul->meta; ?>,
                                <?php echo $mago->meta; ?>,
                                <?php echo $mset->meta; ?>,
                                <?php echo $mout->meta; ?>,
                                <?php echo $mnov->meta; ?>,
                                <?php echo $mdez->meta; ?>],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'radar') {
        config = {
            type: 'radar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    data: [65, 25, 90, 81, 56, 55, 40],
                    borderColor: 'rgba(0, 188, 212, 0.8)',
                    backgroundColor: 'rgba(0, 188, 212, 0.5)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.8)',
                    pointBorderWidth: 1
                }, {
                        label: "My Second dataset",
                        data: [72, 48, 40, 19, 96, 27, 100],
                        borderColor: 'rgba(233, 30, 99, 0.8)',
                        backgroundColor: 'rgba(233, 30, 99, 0.5)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: 'rgba(233, 30, 99, 0.8)',
                        pointBorderWidth: 1
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    else if (type === 'pie') {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [225, 50, 100, 40],
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: [
                    "Pink",
                    "Amber",
                    "Cyan",
                    "Light Green"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    return config;
}

</script>