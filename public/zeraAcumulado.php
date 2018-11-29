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

        	header("Location:http://webdesigner2/sistema/public/atendentes/");
?>