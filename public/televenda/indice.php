<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ranking Televenda Coobrastur</title>
	    <!--script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script-->
        <!-- Bootstrap 3.3.7 -->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="e.css">
        <!--### FLIP LIST ###-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="AdminLTE.min.css">
<body>
<div class="tp"></div>
<div class="spc"></div>
<div class="conteudoI">
    <div class="infoGeraisI">

          <div class="box" style="box-shadow: 2px 2px 15px #555;">
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
                    require "../televenda/conn.php";
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
                  <td><span class="badge bg-default"><?php echo $l['qnt_vendas']; ?></span></td>
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

    <div class="infoBlocoI">

    <div class="box-header">
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
    require "../televenda/conn.php";
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
                  <td><span class="badge bg-default"><?php echo $total; ?></span></td>
                </tr>


            </table>
            </div>
            <!-- /.box-body -->
    </div>




    <div class="infoBlocoI" style="margin-top: 15px;">

<div class="box-header">
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
    require "../televenda/conn.php";
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
              <td><span class="badge bg-default"><?php echo $diamante; ?></span></td>
            </tr>

            <tr>
              <td>2</td>
              <td align="left">GOLD</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:<?php echo $gold; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td><span class="badge bg-default"><?php echo $gold; ?></span></td>
            </tr>

            <tr>
              <td>3</td>
              <td align="left">CONVENCIONAL</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:<?php echo $convencional; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td><span class="badge bg-default"><?php echo $convencional; ?></span></td>
            </tr>

        </table>
        </div>
        <!-- /.box-body -->
</div>




</div>
<script language=javascript type="text/javascript">
function newPopup(){
varWindow = window.open ('http://localhost/televenda/users/', 'popup', "width=500, height=300, right=100, bottom=100, scrollbars=no ")
}
</script>
<a href="javascript:newPopup()">Abrir popup</a>
<div class="bt"></div>
</body>
</html>