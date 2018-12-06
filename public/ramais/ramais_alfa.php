<!-- CONTEUDO -->
<style type="text/css">
@media only screen and (max-width: 1200px) {
    .tabela {
        width: 100%;
    }
}
</style>
<?php
	$num_fila='0';
	$resultado 		= mysqli_query($con, "SELECT * FROM funcionarios order by nome");
	$letra1 = "";
	echo "<br>";
	echo "<table border='0' cellpadding='0' cellspacing='0' class='tabela' width='1000' align='center'>";
	while ($linha = mysqli_fetch_array($resultado)) {
		$setor 		= $linha["setor"];
		$nome 		= utf8_encode($linha["nome"]);
		$ramal 		= $linha["ramal"];
		$email 		= $linha["email"];
		$externo 	= $linha["externo"];
		$num_fila++;
		$letra = substr($nome, 0, 1);
		if($letra != $letra1){
			echo "<tr class='td0'>";
			echo "<td style='border: 1px solid #CCCCCC; background-color: #084362; color: #ffffff; width: 19px; padding: 5px 0px 5px 0px; text-align: center; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>".$letra."</td>";
			echo "<td style='border: 1px solid #CCCCCC; background-color: #CCCCCC; padding: 5px 0px 5px 10px; text-align: left; font-weight: bold; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>Nome</td>";
			echo "<td style='border: 1px solid #CCCCCC; background-color: #CCCCCC; padding: 5px 0px 5px 50px; text-align: left; font-weight: bold; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>E-mail</td>";
			echo "<td style='border: 1px solid #CCCCCC; background-color: #CCCCCC; padding: 5px 20px 5px 0px; text-align: right; font-weight: bold; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>Ramal</td>";
			echo "</tr>";
		}
		echo "<tr>";
		echo "<td class='td1' style='padding: 4px 0px 4px 25px; text-align: left; border-bottom: 1px solid #CCCCCC;'colspan='2' ".$impar.">&nbsp;".$nome."</td>";
		echo "<td class='td2' style='padding: 4px 0px 4px 45px; text-align: left; border-bottom: 1px solid #CCCCCC;' ".$impar.">&nbsp;".$email."</td>";
		echo "<td class='td3' style='padding: 4px 20px 4px 0px; text-align: right; border-bottom: 1px solid #CCCCCC;'".$impar.">&nbsp;".$ramal."</td>";
		echo "</tr>";
		$letra1 = $letra;
	}
?>