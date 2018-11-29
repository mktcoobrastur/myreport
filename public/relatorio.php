<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="Description" content="Software de Gestão Coobrastur">
    <link rel="stylesheet" href="http://webdesigner2/sistema/public/i.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://webdesigner2/sistema/public/lib/AdminLTE.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="http://webdesigner2/sistema/public/lib/style.css" rel="stylesheet">

</head>
<body style="background: #EBEFF4; padding: 20px; text-align: center;">
<style type="text/css">
.minhaDiv {
  display: none; 
}
</style>
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
  <div style="width: 100%; height: 120px; background: #165C81; color: #f0f0f0; margin-bottom: 20px; text-align:center; font-family: Roboto; font-size: 35px; line-height: 120px;">
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



            <!-- Hover Zoom Effect -->
            <div class="block-header">
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-pink">
                            <i class="material-icons">flight_takeoff</i>
                        </div>
                        <div class="content">
                            <div class="text">META GERAL</div>
                            <div class="number"><?php echo $metageral['meta']; ?></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-blue">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">VENDA GERAL</div>
                            <div class="number"><?php echo $vendageral['qnt']; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-light-blue">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL DIFERENÇA</div>
                            <div class="number">
    <?php if($diferencageral < 0) { ?>
    <b style='color: #CA090E;'><?php echo $diferencageral; ?></b>
    <?php } ?>
    <?php if($diferencageral > 0) { ?>
    <b style='color: green;'><?php echo $diferencageral; ?></b>
    <?php } ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-cyan">
                            <i class="material-icons">access_alarm</i>
                        </div>
                        <div class="content">
                            <div class="text">DIAS DE VENDAS</div>
                            <div class="number"><?php echo $diasvenda['uteis']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->

<div style="float: left; width:50%; text-align: center;">
<h4>&nbsp;</h4>

<table class="table" style="font-size: 11px; background: #ffffff;">
  <thead>
    <tr>
      <th scope="col">Representante</th>
      <th scope="col">Total Vendas</th>
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
        <span class="badge" style="font-size: 13px;"><?php echo $l['qnt']; ?></span>
      </td>
      <td align="right"><button type="button" class="btn-toggle" data-element=".minhaDiv">+ detalhes</button></td>
    </tr>

<?php
    }
?>

  <thead>
    <tr class="minhaDiv">
      <th scope="col">Representante</th>
      <th scope="col">Qnt. Vendas do Dia</th>
      <th scope="col" style="text-align: right;">Data Venda</th>
    </tr>
  </thead>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- DIV DETALHES OCULTA -->

<div style="float: left;">

<?php
    //CONSULTA PESQUISA
    $consulta = mysqli_query($con, "SELECT * FROM vendasre WHERE MONTH(indice) = $dataget AND representante = $representante ORDER BY indice ASC");
    while($l = mysqli_fetch_array($consulta)) {
?>
    <tr style="background: #F4F4F4; font-size: 11px;" class="minhaDiv">
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
      <td align="right"><?php echo date("d/m/Y", strtotime($l['indice'])); ?></td>
    </tr>

<?php
    }
?>
</div>
<!-- FIM DIV DETALHES OCULTA -->


  </tbody>
</table>
</div>




<script type="text/javascript">
$(function(){
        $(".btn-toggle").click(function(e){
            e.preventDefault();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

  <div style="width: 700px;  float: left; margin-left: 15px; margin-top: 38px;">

<div>
  <div class="box box-solid">
    <div class="box-header">
      <h3 class="box-title text-blue">Andamento Mês</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body text-center">
      <div class="sparkline" data-type="line" data-spot-Radius="6" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#165C80" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="200px" data-line-Width="2" data-line-Color="#218BC5" data-fill-Color="rgba(57, 204, 204, 0.08)">
    <?php
      //CONSULTA PESQUISA
      $consultaCh = mysqli_query($con, "SELECT * FROM vendasre WHERE MONTH(indice) = $dataget AND representante = $representante ORDER BY indice ASC");
      while($Ch = mysqli_fetch_array($consultaCh)) {
    ?>
    <?php echo $Ch['qnt']; ?>,
    <?php
      }
    ?>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->

  </div>

</div>


<!-- jQuery 3 -->
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
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 5
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