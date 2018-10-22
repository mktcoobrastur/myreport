<?php

$conexao = mysqli_connect("localhost","root","","sistema");

            $idChamado  = $_POST['idChamado'];
            $usuario    = $_POST['usuario'];
            $comentario = utf8_decode($_POST['comentario']);

			
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



			
			
			 $sql = "INSERT INTO comentarios (id, usuario, comentario, tarefa, created_at)
			 VALUES('0000','$usuario','$comentario','$idChamado', NOW())";
			
			
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			

			echo "ok!";
        	header("Location:http://localhost/sistema/public/tarefas/$idChamado");





?>