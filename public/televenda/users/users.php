<?php
    if(isset($_POST['submit'])) {
        $user =     $_POST['users'];
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
                    $consulta = mysqli_query($con, "SELECT * FROM atendentes WHERE id = $user");
                    $l = mysqli_fetch_array($consulta);
                ?>
    <img width="50" id="lgUser" src="i/helpdesk.png" alt="Televenda" class="" style="opacity: 0.7; margin-top: 10px;" />
    <span class="nomeUser">
        <img width="42" class="img-circle pull-left" src="../img/ft/<?php echo $l['img']; ?>" style="" />    
        <b>&nbsp;&nbsp;<?php echo $l['nome']; ?></b>
    </span>
</div>

        <a class="sair hidden" href="/televenda/users/vendas.php?c=<?php echo $l['id']; ?>" style="margin-right: 35px;">Minhas Vendas</a>
        <a class="sair" href="/televenda/users">Sair</a>

        <div class="spc"></div>
<div class="conteudoUsers">
    <div class="mensagem" style="display: none;">
        <span style="width: 100%; display: block; height: 35px;"><img src="i/success.png" alt="Televenda Coobrastur" /></span>
        <span>Venda informada ao sistema.</span>
    </div>
    &nbsp;
    <form action="" method="post" id="ajax_form">
        <div class="form-group">
            <span class="quadroUsers">
                <input type="number" class="form-control nan" value="1" name="qnt" min="0" max="10">
            </span>
            <span class="quadroUsers">
            <select name="plano" class="form-control nan" style="font-size: 10px;">
                    <option value="1">DIAMANTE</option>
                    <option value="2">GOLD</option>
                    <option value="3">CONVENCIONAL</option>
            </select>
            </span>
            <span class="quadroUsers" style="width: 60px; line-height: 40px; text-align: center;">
                <input type="checkbox" title="Marque para continuar!" class="form-control" id="chBx" style="margin-top: -0px;" required>
            </span>
            <span class="quadroUsers" style="">
                <input type="hidden" value="<?php echo $l['id']; ?>" name="user">
                <input type="submit" name="cadastrar" value="Cadastrar" class="forn-control btn btn-primary">
            </span>
            <div style="clear: both;"></div>
        </div>
    </form>
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