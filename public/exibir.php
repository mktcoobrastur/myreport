<?php
// Incluir aquivo de conex�o
include("conn.php");
 
// Recebe a id enviada no m�todo GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysqli_query($con, "SELECT * FROM atendentes WHERE id = '".$id."'");
 
// Pega os dados e armazena em uma vari�vel
$noticia = mysqli_fetch_object($sql);
 

//Pesquisa Vendas por Atendente
$consultaVendas = mysqli_query($con, "SELECT * FROM vendasdia WHERE atendente = '".$id."'");
$valorV         = mysqli_num_rows($consultaVendas);
// Exibe o conteúdo da notica
?>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<div class="lResult">
    <div class="dResult">
        <label>Vendas Acumuladas:</label>
        <?php echo $noticia->qnt_vendas; ?>
    </div>

    <div class="dResult" style="margin-left: 150px;">
        <label>Vendas Distintas:</label>
        <?php echo $valorV; ?>
    </div>
<div style="clear: both;"></div>

<div class="openW" id="open">

</div>

<div>
<div class="clicker" tabindex="1" style="z-index: 999;"><i class="fa fa-angle-down pull-right seta" aria-hidden="true"></i>&nbsp;</div>

<div class="hiddendiv">

<table class="table" style="font-size: 11px; background: #ffffff; color: #000; margin-top: 10px;">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Atendente</th>
      <th scope="col">Qnt</th>
      <th scope="col">Plano</th>
    </tr>
  </thead>
  <tbody>
<?php
while($row = mysqli_fetch_array($consultaVendas)) {
?>
    <tr>
      <th scope="row"><?php echo date("d/m/Y", strtotime($row['created_at'])); ?></th>
      <td>
        <?php
        $consultaAt = mysqli_query($con, "SELECT * FROM atendentes WHERE id = $id");
        $dataA = mysqli_fetch_array($consultaAt);
        echo $dataA['nome'];
        ?>
      </td>
      <td><?php echo $row['qnt']; ?></td>
      <td>
        <?php if($row['plano'] == 1) { echo "DIAMANTE"; } ?>
        <?php if($row['plano'] == 2) { echo "GOLD"; } ?>
        <?php if($row['plano'] == 3) { echo "CONVENCIONAL"; } ?>
      </td>
    </tr>
<?php
}
?>

  </tbody>
</table>

</div>
</div>



        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title text-blue">Sparkline line</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#222" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-Width="2" data-line-Color="#39CCCC" data-fill-Color="rgba(57, 204, 204, 0.08)">
                6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


</div>
<?php 
// Acentuação
header("Content-Type: text/html; charset=UTF-8",true);
?>