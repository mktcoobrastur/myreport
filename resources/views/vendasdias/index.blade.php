@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Relatório Vendas</h1>
        <h1 class="pull-right">
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;" href="{!! route('vendasdias.create') !!}">Registro Televenda</a>
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px; margin-right: 5px;" href="{!! route('vendasres.create') !!}">Registro Representantes</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="box">
          <div class="alert">

  <div class="form-group">
  <form action="/relatorio.php" method="post" target="blank">
    <label>Por mês:</label>
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
    <input type="submit" name="busca" value="Filtrar">
  </form>
  </div>

<div class="form-group">
  <form action="/relatorio.php" method="post" target="blank">
    <label>Por Representante:</label>
    <select name="mes" class="form-control">
<?php
    //Consulta SELECT representantes
    $con = new mysqli("localhost", "root", "", "sistema");
    $consulta = mysqli_query($con, "SELECT * FROM representantes ORDER BY id ASC");
    while ($l = mysqli_fetch_array($consulta)) {
?>
    <option value="<?php echo $l['id']; ?>"><?php echo $l['nome']; ?></option>
<?php
    }
?>
    </select>
    <input type="submit" name="busca" value="Filtrar">
  </form>
  </div>


          </div>
        </div>

        <div class="text-center">
        <a href="#" class="btn btn-primary">Relatório Televenda</a>
        <a href="#" class="btn btn-primary">Relatório Representantes</a>
        <a href="javascript:newPopup()" class="btn btn-primary">Relatório Geral</a>
<script language=javascript type="text/javascript">
  function newPopup(){
  varWindow = window.open ('http://localhost/sistema/public/relGeral.php', 'popup', "width=800, height=500, left=0, top=0, scrollbars=no ")
  }
</script>
        </div>

        <div class="atualiza">

        </div>

        <br />
        <div class="text-center"> 
          
        
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
<div style="clear: both;"></div>      


        </div>
    </div>

    
@endsection
