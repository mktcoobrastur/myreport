<?php

            $idUser  = $_POST['idUser'];
            $acesso = utf8_decode($_POST['acesso']);

			$servername = "mysql05-farm61.uni5.net";
			$username = "marketingcoobr03";
			$password = "i8h9p5z2";
			$banco = "marketingcoobr03";
			
			
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
        	header("Location:".$_ENV['APP_URL']."usuarios/$idUser/edit");

?>