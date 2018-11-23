<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Televenda Coobrastur</title>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../e.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"><body class="bUsers">
<body>
<div class="topoUsers"></div>
<form action="users.php" method="post">
<div class="loginUsers">
    <label><img id="lgUser" src="i/helpdesk.png" alt="Televenda Coobrastur" /></label>
    <div class="form-group">
                <select name="users" class="form-control" id="usuarios" onchange="javascript:document.getElementById('entrar').style.display = 'block';">
                <option> Identifique-se</option>
                <?php
                    require "../../televenda/conn.php";
                    $consulta = mysqli_query($con, "SELECT * FROM atendentes ORDER BY nome ASC");
                
                    while ($l = mysqli_fetch_array($consulta)) {
                ?>
                        <option value="<?php echo $l['id']; ?>">
                            <?php echo $l['nome']; ?>
                        </option>
                <?php
                    }
                ?>
            </select>
                <input type="password" name="token" style="display: none;" placeholder="Digite o token" id="token" class="form-control">
            <input type="submit" name="submit" value="Entrar" class="form-control btn btn-primary" style="display: none;" id="entrar">
    </div>
</div><i class="fa fa-shield" aria-hidden="false"></i>
</form>

<span id="copy">Desenvolvido por Marketing Coobrastur</span>

</body>
</html>