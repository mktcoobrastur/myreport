<?php
// Incluir aquivo de conex�o
include("conn.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
$sql = mysqli_query($con, "SELECT * FROM funcionarios WHERE nome LIKE '%".$valor."%'");
 
// Exibe todos os valores encontrados
while ($noticias = mysqli_fetch_object($sql)) {
	echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$noticias->id."')\">" . utf8_encode($noticias->nome) . "</a><br />";
}
 
?>