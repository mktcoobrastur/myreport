<?php

			$conexao = mysqli_connect("localhost","root","","sistema");

            $idUser  = $_POST['idUser'];
            $acesso = utf8_decode($_POST['acesso']);

			
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



			
			
			 $sql = "INSERT INTO permissoes (id, user, acesso)
			 VALUES('0000','$idUser','$acesso')";
			
			
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			

			//echo "ok!";
        	header("Location:http://webdesigner2/sistema/public/usuarios/$idUser");

?>