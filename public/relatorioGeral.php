<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório Geral</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="Description" content="Software de Gestão Coobrastur">
    <link rel="stylesheet" href="http://webdesigner2/sistema/public/i.css">

</head>
<body style="background: #EBEFF4; padding: 20px; text-align: center;">
<div style="width: 80%; margin: 0 auto;">

  <div class="form-group" style="float: left; width: 400px; margin-left: 10px; margin-top: 2px;">
  <form action="http://webdesigner2/sistema/public/relatorioGeral.php" method="post" target="blank">
    <label style="color:#fff;">Mensal Geral:</label>
    <select name="mes" class="form-control">
      <option value="01">Janeiro</option>
      <option value="02">Fevereiro</option>
      <option value="03">Março</option>
      <option value="04">Abril</option>
      <option value="05">Maio</option>
      <option value="06">Junho</option>
      <option value="07">Julho</option>
      <option value="08">Agosto</option>
      <option value="09">Setembro</option>
      <option value="10">Outubro</option>
      <option value="11">Novembro</option>
      <option value="12">Dezembro</option>
    </select>
    <input type="submit" class="btn btn-primary" style="margin-top: 4px;" name="busca" value="Gerar Relatório">
  </form>
  </div>


<?php
    require "../../televenda/conn.php";
    $dataget = $_POST['mes'];

    ini_set('display_errors', 'Off'); //Não mostra os erros de cálculo caso não tenha venda cadastrada.

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
  Relatório Geral <b><?php if($dataget == 1) { echo "Janeiro"; }
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
                          ?> 2018</b></div>
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
      <span>Dias de Vendas</span>
    </div>
</div>


<div style="float: left; width:70%; text-align: center;">
<h4>&nbsp;</h4>

<table class="table" style="font-size: 12px; background: #ffffff; box-shadow: 1px 1px 10px #ccc;">
  <thead>
    <tr style="text-align: center;">
      <th scope="col" style="text-align: left;">Representante</th>
      <th scope="col">Meta Mensal</th>
      <th scope="col">Meta Diária</th>
      <th scope="col" style="background: #D3E4FE;">1ª Semana</th>
      <th scope="col" style="background: #f0f0f0;">2ª Semana</th>
      <th scope="col" style="background: #D3E4FE;">3ª Semana</th>
      <th scope="col" style="background: #f0f0f0;">4ª Semana</th>
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

  <?php
    $consulta1 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget AND DAY(indice) >= 1 AND DAY(indice) <= 6 AND representante = $id ORDER BY indice ASC");
    $semana1 = mysqli_fetch_array($consulta1);
    $consulta2 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget AND DAY(indice) >= 7 AND DAY(indice) <= 13 AND representante = $id ORDER BY indice ASC");
    $semana2 = mysqli_fetch_array($consulta2);
    $consulta3 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget AND DAY(indice) >= 14 AND DAY(indice) <= 21 AND representante = $id ORDER BY indice ASC");
    $semana3 = mysqli_fetch_array($consulta3);
    $consulta4 = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre WHERE MONTH(indice) = $dataget AND DAY(indice) >= 22 AND DAY(indice) <= 31 AND representante = $id ORDER BY indice ASC");
    $semana4 = mysqli_fetch_array($consulta4);
?>
      <td style="background: #D3E4FE;"><?php echo $semana1['qnt'];?></td>
      <td style="background: #f0f0f0;"><?php echo $semana2['qnt'];?></td>
      <td style="background: #D3E4FE;"><?php echo $semana3['qnt'];?></td>
      <td style="background: #f0f0f0;"><?php echo $semana4['qnt'];?></td>

      <td>
        <?php echo $t['qnt']; ?>
      </td>

      <?php if($resultado < 0) { ?>
      <td style="color: red;">
        <b><?php echo $resultado; ?></b>
      </td>
      <?php } ?>
      <?php if($resultado > 0) { ?>
      <td style="color: green;">
      <b><?php echo $resultado; ?></b>
      </td>
      <?php } ?>

</tr>

<?php
    }
?>
  </tbody>
</table>
</div>

        <div style="float: left; margin: 80px;">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title text-warning"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <div class="sparkline" data-type="bar" data-width="200px" data-height="180px" data-bar-Width="30" data-bar-Spacing="10" data-bar-Color="#f39c12">
              <?php echo $semana1['qnt'];?>,<?php echo $semana2['qnt'];?>,<?php echo $semana3['qnt'];?>,<?php echo $semana4['qnt'];?>,8
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div style="position: absolute; font-size: 10px; color:#F29B1A;">1sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           2sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           3sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           4sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           5 sem</div>
        </div>
        <!-- /.col -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="http://webdesigner2/sistema/public/lib/jquery.min.js"></script>
<script src="http://webdesigner2/sistema/public/lib/jquery.knob.js"></script>
<script src="http://webdesigner2/sistema/public/lib/jquery.sparkline.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
        });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', {type: 'bar'});

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type: 'bar',
      tooltipFormat: '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
      }
    });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: 'blue', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500; // update display every 500ms
    var lastmousex = -1;
    var lastmousey = -1;
    var lastmousetime;
    var mousetravel = 0;
    var mpoints = [];
    var mpoints_max = 30;
    $('html').mousemove(function (e) {
      var mousex = e.pageX;
      var mousey = e.pageY;
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
      }
      lastmousex = mousex;
      lastmousey = mousey;
    });
    var mdraw = function () {
      var md = new Date();
      var timenow = md.getTime();
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
        mpoints.push(pps);
        if (mpoints.length > mpoints_max)
          mpoints.splice(0, 1);
        mousetravel = 0;
        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
      }
      lastmousetime = timenow;
      setTimeout(mdraw, mrefreshinterval);
    };
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }
</script>
</body>
</html>