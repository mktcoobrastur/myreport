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
        Início
        <small>coobrastur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


      <!-- callout -->
      <div class="callout callout-info">
        <h4>Gerenciamento de tarefas por departamento.</h4>
        <p>O gerenciador foi projetado para otimizar o tempo de resposta entre os departamentos.</p>
      </div>
      <!-- /.callout -->


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
            $conexao  = mysqli_connect("localhost","root","","sistema");
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
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaElogios; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Elogios</div>
                </div>
                <!-- ./col -->
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaInfo; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Informações</div>
                </div>
                <!-- ./col -->
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaRecl; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Reclamações</div>
                </div>
                <!-- ./col -->
                <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $linhaServ; ?>" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label labelChart">Serviços ou Solicitações</div>
                </div>
                <!-- ./col -->
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
<script src="/js/jquery.knob.js"></script>
@endsection