<?php

			$conexao = mysqli_connect("localhost","root","","sistema");

            $nome  		= $_POST['nome'];
            $depto    	= utf8_decode($_POST['depto']);
            $sugestao 	= utf8_decode($_POST['sugestao']);
			
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
			
			 // Envia Comentario
			$sql = "INSERT INTO sugestoes (id, nome, depto, sugestao, created_at) VALUES('0000','$nome','$depto','$sugestao', NOW())";
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			header("Location:http://webdesigner2/sistema/public/");
?>