<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$banco = "sistema";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $banco);
			
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "UPDATE atendentes SET qnt_vendas = 0";
			
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

						 // Cadastra notificação
						 $tabela = "atendentes";
						 date_default_timezone_set('America/Sao_Paulo');
						 $date = date('d/m/Y H:i');
						 echo $date;
						 $tabela = "O acumulado de vendas dos atendentes foi zerado em ".$date.".";
						 $sql = "INSERT INTO notificacoes (id, user, tabela, mensagem, created_at) VALUES('0000','1','$tabela','$mensagem', NOW())";
						 if (mysqli_query($conn, $sql)) {
							 echo "";
						 } else {
							 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						 }
			
			echo "ok!";
        	header("Location:atendentes/");
?>