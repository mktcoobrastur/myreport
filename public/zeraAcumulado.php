<?php

			$conn    = mysqli_connect("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
			
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