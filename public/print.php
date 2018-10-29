<?php

    $idChamado  = $_GET['c'];
    $conexao    = mysqli_connect("localhost","root","","sistema");
    $query      = "SELECT * FROM chamados WHERE id = $idChamado;";
    $query      = mysqli_query($conexao, $query);
    while ($linha = mysqli_fetch_array($query)) {

?>

<style type="text/css">
	.all {
		width: 900px;
		border: 1px solid #ccc;
		font-family: Arial;
	}
	.logo {
		float: right;
		margin-right: 150px;
		margin-top: 35px;
	}
	h2 {
		margin: 60px;
		text-align: center;
	}
	b {
		font-size: 15px;
	}
	table {
		margin-left: 45px;
	}
	td {
		padding: 5px;
	}
	.mensagem {
		width: 800px;
		margin-left: 50px;
		margin-top: 50px;
		font-size: 14px;
	}
	.space {
		margin: 0 auto;
		width: 80%;
		height: 20px;
		border-top: 1px dashed #ccc;
	}
</style>

<div class="all">
	<img class="logo" src="img/logoDossie.png" alt="Coobrastur" />
	<h2>Dossiê de Reclamação<br /><b>PROTOCOLO:</b> <?php echo $linha['id']; ?></h2>
		<div class="space"></div>
	<table>
		<tr>
			<td style="width: 450px;"><b>Usuário:</b> <?php echo $linha['usuario']; ?></td>
			<td style="width: 399px;"><b>CPF:</b> <?php echo $linha['cpf']; ?></td>
		</tr>
		<tr>
			<td style="width: 450px;"><b>Email:</b> <?php echo $linha['email']; ?></td>
			<td style="width: 399px;"><b>Telefone:</b> <?php echo $linha['fone']; ?></td>
		</tr>
	</table>

		<br /><div class="space"></div>
<div class="mensagem">
	<b>Data de Abertura:</b> <?php echo $linha['created_at']; ?>
</div>

<div class="mensagem">
	<b>Descrição da Reclamação:</b> <?php echo utf8_encode($linha['mensagem']); ?>
</div>

<?php if ($linha['entendimento'] != '') { ?>
<div class="mensagem">
	<b>Entendimento:</b> <?php echo utf8_encode($linha['entendimento']); ?>
</div>
<?php } ?>

<?php if ($linha['solucao'] != '') { ?>
<div class="mensagem">
	<b>Solução:</b> <?php echo utf8_encode($linha['solucao']); ?>
</div>
<?php } ?>

    <br /><br />
</div>

<?php } ?>