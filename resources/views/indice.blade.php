@extends('layouts.app')

@section('content')
        <script>
            $(function($) {

                $(".knob").knob({
                    change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        //console.log(this.$.attr('value'));
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : ", this);
                    },
                    /*format : function (value) {
                        return value + '%';
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            this.cursorExt = 0.3;

                            var a = this.arc(this.cv)  // Arc
                                , pa                   // Previous arc
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            if (this.o.displayPrevious) {
                                pa = this.arc(this.v);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>

<style type="text/css">
  .labelChart {
    font-size: 16px !important;
    font-family: 'Source Sans Pro';
    color: #316C91 !important;
    font-weight: 300 !important;
  }
  .info-img {
    font-family: 'Source Sans Pro' !important;
    font-size: 30px;
  }
  .caixaBl {
    width: 220px;
    margin-top: 20px;
    margin-left: 80px;
    background: #f0f0f0;
    border-radius: 8px;
    padding: 5px;
  }
</style>

<section class="content-header">

     <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Índice de Entrada de Chamados</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            #### ELOGIOS ####
            $sql    = "SELECT * FROM chamados WHERE motivo = 'Elogios'";
            $query    = mysqli_query($conexao, $sql); $linhaElogios = mysqli_num_rows($query);
            #### INFORMAÇÕES ####
            $sql    = "SELECT * FROM chamados WHERE motivo = 'Informacoes'";
            $query    = mysqli_query($conexao, $sql); $linhaInfo = mysqli_num_rows($query);
            #### RECLAMAÇÕES ####
            $sql    = "SELECT * FROM chamados WHERE motivo = 'Reclamacoes'";
            $query    = mysqli_query($conexao, $sql); $linhaRecl = mysqli_num_rows($query);
            #### SERVIÇOS ####
            $sql    = "SELECT * FROM chamados WHERE motivo = 'Servicos'";
            $query    = mysqli_query($conexao, $sql); $linhaServ = mysqli_num_rows($query);
        ?>

            <!-- /.box-header -->
            <div class="box-body">
                <!-- ./col -->
            <div class="alert">
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaElogios; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Elogios</div>
                  <div id="MeuDiv" style="display: none;" class="caixaBl caixaum">
                      <?php
                        $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                        $queryCh8 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Elogios'");
                        $linha8 = mysqli_num_rows($queryCh8);
                            echo '<b>'.$linha8." chamados</b><br />";

                            $queryCh81 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Elogios' AND status = 'ABERTO'");
                            $linha81 = mysqli_num_rows($queryCh81);
    
                            echo '<i>'.$linha81." aguardando reposta.</i><br />";
                          ?>                    
                  </div>
                </div>
                <!-- ./col -->
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaInfo; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Informações</div>
                  <div id="MeuDiv2" style="display: none;" class="caixaBl caixadois">
                      <?php
                        $queryCh7 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Informacoes'");
                        $linha7 = mysqli_num_rows($queryCh7);
                        echo '<b>'.$linha7." chamados</b><br />";

                        $queryCh71 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Informacoes' AND status = 'ABERTO'");
                        $linha71 = mysqli_num_rows($queryCh71);

                        echo '<i>'.$linha71." aguardando reposta.</i><br />";
                      ?>                    
                  </div>

                </div>
                <!-- ./col -->
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaRecl; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Reclamações</div>
                  <div id="MeuDivt" style="display: none;" class="caixaBl caixatres">
                      <?php
                        $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                        $queryCh6 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Reclamacoes'");
                        $linha6 = mysqli_num_rows($queryCh6);
                            echo '<b>'.$linha6." chamados</b><br />";
                            
                            $queryCh61 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Reclamacoes' AND status = 'ABERTO'");
                            $linha61 = mysqli_num_rows($queryCh61);
    
                            echo '<i>'.$linha61." aguardando reposta.</i><br />";
                      ?>                    
                  </div>

                </div>
                <!-- ./col -->
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaServ; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Serviços e/ou Solicitações</div>
                  <div id="MeuDiv" style="display: none;" class="caixaBl caixaquatro">
                      <?php
                        $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                        $queryCh5 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Servicos'");
                        $linha5 = mysqli_fetch_array($queryCh5);
                            echo '<b>'.$linha5." chamados</b><br />";

                            $queryCh51 = mysqli_query($con, "SELECT * FROM chamados WHERE motivo = 'Reclamacoes' AND status = 'ABERTO'");
                            $linha51 = mysqli_num_rows($queryCh51);
    
                            echo '<i>'.$linha51." aguardando reposta.</i><br />";
?>                    
                  </div>
                </div>
                <!-- ./col -->
            </div>

                  <div style="width: 100%; text-align: center; margin-top: 50px;">
	                <a id="exibir" href="" class="btn btn-primary" style="text-decoration: none;">+ detalhes</a>
                  </div>

            </div>


              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


<script>
    //Elogios
	$(document).ready(function(){

		$("a").click(function(event){
			var link = $(this);			

			if(link.attr("id").match("esconder"))
				$("#MeuDiv").hide("slow");
			else
				$("#MeuDiv").show("slow");

			event.preventDefault();
		});
	})
    //Informações
    $(document).ready(function(){

    $("a").click(function(event){
    var link = $(this);			

    if(link.attr("id").match("esconder2"))
        $("#MeuDiv2").hide("slow");
    else
        $("#MeuDiv2").show("slow");

    event.preventDefault();
    });
})
    //Informações
    $(document).ready(function(){

$("a").click(function(event){
var link = $(this);			

if(link.attr("id").match("escondert"))
    $(".caixatres").hide("slow");
else
    $(".caixatres").show("slow");

event.preventDefault();
});
})

</script>

</section>
    <!-- /.content -->

<script src="<?php echo $_ENV['APP_URL']; ?>js/jquery.knob.js"></script>
@endsection