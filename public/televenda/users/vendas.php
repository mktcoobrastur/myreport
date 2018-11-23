<?php
    if(isset($_GET['c'])) {
        $user =     $_GET['c'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Televenda Coobrastur</title>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../e.css">

<body class="bUsers">
 
<div class="topoUsers">
                <?php
                    require "../../televenda/conn.php";
                    // CONSULTA ATENDENTE LOGADO
                    $consulta = mysqli_query($con, "SELECT * FROM atendentes WHERE id = $user");
                    $l = mysqli_fetch_array($consulta);
                    // CONSULTA EQUIPE
                    $consulta = mysqli_query($con, "SELECT SUM(qnt_vendas) FROM atendentes");
                    $totalEquipe = mysqli_num_rows($consulta);
                ?>
    <img width="50" id="lgUser" src="i/helpdesk.png" alt="Televenda" class="" style="opacity: 0.7; margin-top: 10px;" />
    <span class="nomeUser">
        <img width="42" class="img-circle pull-left" src="../img/ft/<?php echo $l['img']; ?>" style="" />    
        <b>&nbsp;&nbsp;<?php echo $l['nome']; ?></b>
    </span>
</div>

        <a class="sair" href="/televenda/users" style="margin-right: 35px;">Voltar</a>
        <a class="sair" href="/televenda/users">Sair</a>

        <div class="spc"></div>

<div class="conteudoUsers" style="color: #000;">
    <div class="boxResultado">
        <label>Minhas Vendas:</label> <br />
        <span class="badge"><?php echo $l['qnt_vendas']; ?></span>
    </div>

    <div class="boxResultado">
        <label>Total Equipe:</label> <br />
        <span class="badge"><?php echo $totalEquipe; ?></span>
    </div>
    <div style="clear: both;"></div>
</div>

<span id="copy">Desenvolvido por Marketing Coobrastur</span>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "a.php",
				data: dados,
				success: function( data )
				{       
                        $('.mensagem').fadeIn(2500);
                        $('.mensagem').fadeOut(2500);
                        $('#ajax_form').each (function(){
                        this.reset();
});
				}
			});
			
			return false;
		});
	});
    </script>
</body>
</html>