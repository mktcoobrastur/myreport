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
			
			 // Envia Comentario
			$sql = "INSERT INTO comentarios (id, usuario, comentario, tarefa, created_at) VALUES('0000','$usuario','$comentario','$idChamado', NOW())";
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			 // Cadastra notificação
			 $tabela = "comentarios";
			 $tabela = "Alguem comentou em uma tarefa do seu departamento.";
			 $sql = "INSERT INTO notificacoes (id, user, tabela, mensagem, created_at) VALUES('0000','$usuario','$tabela','$mensagem', NOW())";
			 if (mysqli_query($conn, $sql)) {
				 echo "";
			 } else {
				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			 }
 
        	header("Location:tarefas/$idChamado");
?>