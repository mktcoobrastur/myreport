<html>
<head>
    <title>Relatório Televenda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
    <link rel="stylesheet" href="AdminLTE.min.css" >
</head>
<body>
<style type="text/css">
  table {
    font-size: 12px;
  }
</style>
          <div style="background: #165C80;
                      width: 98%;
                      height: 120px;
                      line-height: 120px;
                      margin: 1%;
                      text-align: center;
                      font-family: 'Open Sans';
                      font-size: 30px;
                      color: #f0f0f0;
                      text-shadow: 2px 2px 15px #333;">Relatório geral TELEVENDA</div>

<div class="text-center" style="margin: 2%;"> 
          <div class="box" style="float: left; box-shadow: 2px 2px 15px #ccc; width: 50%;">
              <div class="box-header">
                <h3 class="box-title">Vendas por Atendente</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th>Progresso</th>
                    <th style="width: 40px">%</th>
                  </tr>
  
  
                  <?php
                      // CONSULTA ATENDENTES
                      $con = new mysqli("localhost", "root", "", "sistema");
                      $consulta = mysqli_query($con, "SELECT * FROM atendentes ORDER BY qnt_vendas DESC");
                  
                      while ($l = mysqli_fetch_array($consulta)) {
                  ?>
                              
                  <tr>
                    <td><?php echo $l['id']; ?></td>
                    <td align="left"><?php echo $l['nome']; ?></td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:<?php echo $l['qnt_vendas']; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $l['qnt_vendas']; ?></span></td>
                  </tr>
  
                  <?php
                      }
                  ?>
  
              </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
      </div>
  
      <div class="infoBlocoI" style="float: left; width: 45%; margin-left: 2%; background: #fff; box-shadow: 2px 2px 15px #ccc;">
  
      <div class="box-header" style="text-align: center;">
          <h3 class="box-title">Visão geral</h3>
      </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th>Progresso</th>
                    <th style="width: 40px">Total</th>
                  </tr>
  
  <?php
      //Consulta DIAMANTE
      $consultaT = mysqli_query($con, "SELECT * FROM vendasdia");
      $total = mysqli_num_rows($consultaT);
  ?>
                              
                  <tr>
                    <td>#</td>
                    <td align="left">Televenda</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:37%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $total; ?></span></td>
                  </tr>
  
  
              </table>
              </div>
              <!-- /.box-body -->
      </div>
  
  
  
  
      <div class="infoBlocoI" style="float: left; width: 45%; margin-left: 2%; margin-top: 30px; background: #fff; box-shadow: 2px 2px 15px #ccc;">
  
  <div class="box-header" style="text-align: center;">
      <h3 class="box-title">Visão geral ( por planos )</h3>
  </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped">
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Progresso</th>
                <th style="width: 40px">Total</th>
              </tr>
  <?php
      //Consulta DIAMANTE
      $consultaD = mysqli_query($con, "SELECT * FROM vendasdia WHERE plano = 1");
      $diamante = mysqli_num_rows($consultaD);
      //Consulta GOLD
      $consultaG = mysqli_query($con, "SELECT * FROM vendasdia WHERE plano = 2");
      $gold = mysqli_num_rows($consultaG);
      //Consulta CONVENCIONAL
      $consultaC = mysqli_query($con, "SELECT * FROM vendasdia WHERE plano = 3");
      $convencional = mysqli_num_rows($consultaC);
  ?>
              <tr>
                <td>1</td>
                <td align="left">DIAMANTE</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:<?php echo $diamante; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $diamante; ?></span></td>
              </tr>
  
              <tr>
                <td>2</td>
                <td align="left">GOLD</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:<?php echo $gold; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $gold; ?></span></td>
              </tr>
  
              <tr>
                <td>3</td>
                <td align="left">CONVENCIONAL</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:<?php echo $convencional; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $convencional; ?></span></td>
              </tr>
  
          </table>
          </div>
          <!-- /.box-body -->
  </div>
  
      <div class="infoBlocoI" style="float: left; width: 45%; margin-left: 2%; margin-top: 30px; background: #fff; box-shadow: 2px 2px 15px #ccc;">
  
  <div class="box-header" style="text-align: center;">
      <h3 class="box-title">Por Representante</h3>
  </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped">
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Progresso</th>
                <th style="width: 40px">Total</th>
              </tr>
              <?php
                      // CONSULTA ATENDENTES
                      $con = new mysqli("localhost", "root", "", "sistema");
                      $consulta = mysqli_query($con, "SELECT * FROM representantes");
                  
                      while ($l = mysqli_fetch_array($consulta)) {
                  ?>
                              
                  <tr>
                    <td><?php echo $l['id']; ?></td>
                    <td align="left"><?php echo $l['nome']; ?></td>
                    <td>-
                    </td>
                    <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $l['qnt']; ?></span></td>
                  </tr>
  
                  <?php
                      }
                  ?>
  
  
            </table>
          </div>
          <!-- /.box-body -->
  </div>
  </body>
  </html>