<!-- CONTEUDO -->
<?php
	$resultado = mysqli_query($con, "SELECT * FROM funcionarios order by setor, nome");
	ini_set('default_charset','UTF-8');
	$letra1 = "";
	echo "<br>";
	echo "<table border='0' cellpadding='0' cellspacing='0' width='740' align='center'>";
	$setorTemp = "";
	while ($linha = mysqli_fetch_array($resultado)) {
		$setor = utf8_encode($linha["setor"]);
		$nome = utf8_encode($linha["nome"]);
		$ramal = $linha["ramal"];
		$email = $linha["email"];
		$externo = $linha["externo"];
		$num_fila++;
		if($setor <> $setorTemp){
			$estilo1 = "style='background-color: #AAAAAA;'";
			echo "<td style='color: #ffffff; background-color: #08436e; padding: 5px 0px 5px 20px; text-align: left;' colspan='2'><font size='3'>".$setor."</font>";
			if($externo <> $externoTemp){
				$estilo1 = "style='background-color: #AAAAAA;'";
				echo "<td style='color: #ffffff; background-color: #08436e; padding: 5px 20px 5px 0px; text-align: right;' colspan='2'><font size='3'>".$externo."</font>";
			}else { echo "<td style='background-color: #08436e;' colspan='2'>"; }
			echo "<tr>";
			echo "<td style='border: 1px solid #DCDCDC; background-color: #DCDCDC; font-weight: bold; padding: 5px 0px 5px 20px; text-align: left; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>Nome</td>";
			echo "<td style='border: 1px solid #DCDCDC; background-color: #DCDCDC; font-weight: bold; padding: 5px 0px 5px 50px; text-align: left; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>E-mail</td>";
			echo "<td style='border: 1px solid #DCDCDC; background-color: #DCDCDC; font-weight: bold; padding: 5px 20px 5px 0px; text-align: right; border-bottom: 1px solid #666666; border-top: 1px solid #666666;'>Ramal</td>";
			echo "</tr>";
		}
		$estilo2 = $impar;
		echo "<tr>";
		echo "<td class='td1' style='padding: 4px 0px 4px 15px; background-color: #fff; text-align: left; border-bottom: 1px solid #CCCCCC;' ".$estilo2.">";
		if($nome != ""){ echo "&nbsp;" . $nome; } else { echo "&nbsp;"; }
		echo "</td>";
		echo "<td class='td2' style='padding: 4px 0px 4px 45px; text-align: left; background-color: #fff; border-bottom: 1px solid #CCCCCC;' ".$estilo2.">";
		if($email != ""){ echo "&nbsp;" . $email; } else { echo "&nbsp;"; }
		echo "</td>";
		echo "<td class='td3' style='padding: 4px 20px 4px 0px; text-align: right; background-color: #fff; border-bottom: 1px solid #CCCCCC;' ".$estilo2.">";
		if($ramal != ""){ echo "&nbsp;" . $ramal; } else { echo "&nbsp;"; }
		echo "</td>";
		echo "</tr>";
		$setorTemp = $setor;
	}
	echo "<tr>";
	echo "<td style='border-top: 1px solid #666666;' colspan='5'>&nbsp;</td>";
	echo "</tr>";
	echo "</table>";
?>