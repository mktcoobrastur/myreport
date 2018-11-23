<?php

<<<<<<< HEAD
			$conexao 	= mysqli_connect("localhost","root","","sistema");
=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
            $from  	 	= utf8_decode($_POST['de']);
            $para    	= utf8_decode($_POST['para']);
            $recado    	= utf8_decode($_POST['recado']);

<<<<<<< HEAD
			$servername = "localhost";
			$username 	= "root";
			$password 	= "";
			$banco 		= "sistema";
=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
			
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
<<<<<<< HEAD
		
=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
			echo "Recado Enviado!";
?>