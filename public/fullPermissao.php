<?php

			$con = new mysqli("localhost", "root", "", "sistema");
			
			$idUser  = $_GET['idUser'];
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

			$consulta = mysqli_query($con, "SELECT * FROM departamentos");
			// Loop preenche todos os acessos
			while($r = mysqli_fetch_array($consulta)) {
				$acesso = $r['id'];
				$sql = "INSERT INTO permissoes (id, user, acesso)
				VALUES('0000','$idUser','$acesso')";
			   
			   
			   if (mysqli_query($conn, $sql)) {
				   echo "";
			   } else {
				   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			   }
				   
			}
			
			

			//echo "ok!";
        	header("Location:usuarios/$idUser");

?>