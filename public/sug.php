<?php

			$conexao    = mysqli_connect("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");

            $nome  		= $_POST['nome'];
            $depto    	= utf8_decode($_POST['depto']);
            $sugestao 	= utf8_decode($_POST['sugestao']);
			
			// Check connection
			if (!$conexao) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			
			 // Envia Comentario
			$sql = "INSERT INTO sugestoes (id, nome, depto, sugestao, created_at) VALUES('0000','$nome','$depto','$sugestao', NOW())";
			if (mysqli_query($conexao, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
			}

			header("Location:http://webdesigner2/sistema/public/");
?>