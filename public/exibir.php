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

</div>
<?php 
// Acentua��o
header("Content-Type: text/html; charset=UTF-8",true);
?>