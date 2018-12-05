<?php
// Incluir aquivo de conex�o
include("conn.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
$sql = mysqli_query($con, "SELECT * FROM atendentes WHERE nome LIKE '%".$valor."%'");
 
// Exibe todos os valores encontrados
while ($noticias = mysqli_fetch_object($sql)) {
	echo "<a class='linkResult' href=\"javascript:func()\" onclick=\"exibirConteudo('".$noticias->id."')\"><i class='fa fa-user-o' aria-hidden='true'></i> " . $noticias->nome . "</a>";
}
 
// Acentua
?>