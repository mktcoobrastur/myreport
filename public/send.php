<?php

			$conexao 	= mysqli_connect("localhost","root","","sistema");
            $from  	 	= utf8_decode($_POST['de']);
            $para    	= utf8_decode($_POST['para']);
            $recado    	= utf8_decode($_POST['recado']);

			$servername = "localhost";
			$username 	= "root";
			$password 	= "";
			$banco 		= "sistema";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $banco);
			
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			 $sql = "INSERT INTO recados (id, de, para, recado, created_at)
			 VALUES('0000','$from','$para','$recado', NOW())";
			
			
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		
			echo "Recado Enviado!";
?>