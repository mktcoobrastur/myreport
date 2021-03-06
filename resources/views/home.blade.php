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
    padding-left: 20px;
    color: #777;
  }
</style>

<section class="content-header">
      <h1>
      <i class="fa fa-dashboard"></i> Painel Principal
      </h1>
      <ol class="breadcrumb">
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!--div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Dicas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            Bem vindo ao myReport!<br />
            <img src="/img/info-recado.jpg" style="border: 4px solid #92C0DC; padding: 10px; margin: 5px;" alt="Recados" />
            <span class="info-img"> <i class="fa fa-hand-o-left" aria-hidden="true"></i> Veja se você tem alguma mensagem na sua caixa de entrada.</span>
        </div>
      </div-->
      <!-- /.box -->

      <!-- callout>
      <div class="callout callout-info">
        <h4>Gerenciamento de tarefas por departamento.</h4>
        <p>O gerenciador foi projetado para otimizar o tempo de resposta entre os departamentos.</p>
      </div>
      < /.callout -->


<div class="box">
    <div class="alert">
        <?php require "charts.php"; ?>
    </div>
</div>

<script src="js/jquery.knob.js"></script>
     
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
     .OutR {
         width: 100%;
         height: 500px;
         background: #fff;
         border-radius: 5px;
         box-shadow: 1px 1px 7px #ccc;
     }
     .infoTop {
         float: left;
         width: 20%;
         height: 120px;
         /*background: #ccc;*/
         text-align: center;
     }
     .mtop {
         margin-top: 30px;
     }
     .estCenter {
         float: left;
         width: 90%;
         border-top: 1px solid #ccc;
         margin-left: 5%;
         margin-top: 40px;
     }
     .repeatCenter{
         float: left;
         width: 20%;
         margin-top: 20px;
         text-align: center;
     }
     .descr {
         float: left;
         width: 30%;
         margin-left: 2.5%;
         margin-top: 50px;
         height: 205px;
         background: #ffffff;
         border-radius: 10px;
         box-shadow: 1px 1px 10px #ccc;
         padding: 20px;
         font-size: 18px;
     }
     .descr b {
         color: #89C053;
     }
     </style>
     
     <section class="content-header">
     
          <div class="row">
             <div class="col-xs-12">
               <div class="box box-solid">
                 <div class="box-header">
                   <i class="fa fa-bar-chart-o"></i>
     
                   <h3 class="box-title">Índice Reclame Aqui ( 6 meses )</h3>
                   <i style=""> - Fonte de dados site reclameaqui.com.br</i>
                   <div class="box-tools pull-right">
                     </button>
                   </div>
                 </div>
     
                 <div class="alert">
                 <?php 
                     $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                     $consulta = mysqli_query($con, "SELECT * FROM indices");
                     $l = mysqli_fetch_object($consulta);
                 ?>
     
                 <div class="OutR">
                     <div class="infoTop">
                     <img src="<?php echo $l->indice; ?>" style="margin-left: -20px;" width="100" alt="Indice" />
                    <span style="position: absolute; margin-top: 20px; font-size: 23px;">
                    <?php echo $l->nota; ?><i style="font-size: 14px;">/10</i><br />
                        <b><?php echo $l->ind; ?></b>
                    </span>

                     <i style="display: block;"><?php echo $l->periodoinicio; ?> - <?php echo $l->periodofinal; ?></i>
                     </div>
                     <div class="infoTop">
                         <div class="text-center mtop">
                         <input type="text" class="knob" value="<?php echo $l->atendidas; ?>" data-skin="tron" data-thickness="0.2" data-width="70" data-height="70" data-fgColor="#3c8dbc" data-readonly="true">
                         <div class="knob-label labelChart">Reclamações<br /> respondidas</div>
                         </div>
                     </div>
                     <div class="infoTop">
                     <div class="text-center mtop">
                         <input type="text" class="knob" value="<?php echo $l->voltarianegocio; ?>" data-skin="tron" data-thickness="0.2" data-width="70" data-height="70" data-fgColor="#89C053" data-readonly="true">
                         <div class="knob-label labelChart">Voltaria a <br />fazer negócio</div>
                         </div>
                     </div>
                     <div class="infoTop">
                     <div class="text-center mtop">
                         <input type="text" class="knob" value="<?php echo $l->solucao; ?>" data-skin="tron" data-thickness="0.2" data-width="70" data-height="70" data-fgColor="#3c8dbc" data-readonly="true">
                         <div class="knob-label labelChart">Índice de <br />solução</div>
                         </div>
                     </div>
                     <div class="infoTop">
                     <div class="text-center mtop">
                         <input type="text" class="knob" value="<?php echo $l->notaconsumidor; ?>" data-skin="tron" data-thickness="0.2" data-width="70" data-height="70" data-fgColor="#89C053" data-readonly="true">
                         <div class="knob-label labelChart">Nota do <br />consumidor</div>
                         </div>
                     </div>
                     <div class="estCenter">
                         <div class="repeatCenter">
                             <b>Reclamações</b><br/> <?php echo $l->reclamacoestotal; ?>
                         </div>
                         <div class="repeatCenter">
                             <b>Respondidas</b><br/> <?php echo $l->reclamacoesatendidas; ?>
                         </div>
                         <div class="repeatCenter">
                             <b>Não respondidas</b><br/> <?php echo $l->reclamacoesnaoatendidas; ?>
                         </div>
                         <div class="repeatCenter">
                             <b>Avaliadas</b><br/> <?php echo $l->avaliacoes; ?>
                         </div>
                         <div class="repeatCenter">
                             <b>Tempo de Resposta</b><br/> <?php echo $l->temporesposta; ?>
                         </div>
                     </div>
     
                     <div class="descr">
                     <b>Respondeu <?php echo $l->atendidas; ?>%</b> das reclamações e <b>resolveu <?php echo $l->solucao; ?>% dos problemas</b>
                     </div>
     
                     <div class="descr">
                     Esta empresa recebeu <b style="color: #CA090E;"><?php echo $l->reclamacoestotal; ?> reclamações</b> nos últimos 12 meses
                     </div>
                     <div class="descr">
                     De todos que reclamaram, <b><?php echo $l->voltarianegocio; ?>% voltariam a fazer negócio</b> com ela e deram uma nota média de <b style="color: #999;"><?php echo $l->notaconsumidor; ?> para o atendimento recebido</b>
                     </div>
     </div>
     
     
     
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
     
     
     
     
     </section>
         <!-- /.content -->

</section>
    <!-- /.content -->
<script src="js/jquery.knob.js"></script>
@endsection