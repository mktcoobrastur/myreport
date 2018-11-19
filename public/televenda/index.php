<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ranking Televenda Coobrastur</title>
	    <!--script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script-->
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="e.css">
<body>
<div class="tp"></div>
<?php
    $metaTotal = 550;
    require "conn.php";
    $consulta = mysqli_query($con, "SELECT (SUM(qnt_vendas)) AS total FROM atendentes");
    $query = mysqli_fetch_array($consulta);
    $totalVendas = $query['total'];
?>

<div class="logoCobrastur">
    <img src="img/logo-coobrastur.png" />
</div>

    <span class="progressMeta">
        <label>Progresso das Vendas</label>
        <div class="progress" style="width: 250px;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="200" aria-valuemin="0" aria-valuemax="<?php echo $metaTotal; ?>"></div>
        </div>
        <label>Meta:</label>
        <h4><?php echo $metaTotal; ?></h4>
        <label>Vendas da Equipe</label>
        <h4><?php echo $totalVendas; ?></h4>
    </span>

    <div class="topo"></div>
        <img width="300" data-aos="flip-down" class="rankingTitulo" src="img/ranking-coobrastur.png" alt="Coobrastur" />
    </div>

    <div class="auto">
        <div class="outLista" id="flip-list">
            <!-- DADOS LISTAGEM ORDER BY qnt_vendas DESC -->
            <transition-group name="flip-list" tag="ul" id="lista">
            </transition-group>
             
            <!-- DADOS CAMPEÃO -->
            <transition-group name="flip-list" tag="ul" id="listaC">
            </transition-group>

        </div>
    </div>


<div class="bt"></div>

        <!--div class="player">
            <audio autoplay="autoplay">
                <source src="javascript:tocamp3();" type="audio/mp3" />
                seu navegador não suporta HTML5
            </audio>
        </div-->

    <script src="ajax.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></head>
<script>
  AOS.init();
</script>
</body>
</html>