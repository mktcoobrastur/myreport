<?php

			$conexao    = mysqli_connect("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
            $from  	 	= utf8_decode($_POST['de']);
            $para    	= utf8_decode($_POST['para']);
            $recado    	= utf8_decode($_POST['recado']);

			
			// Create connection
			
			// Check connection
			if (!$conexao) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			 $sql = "INSERT INTO recados (id, de, para, recado, created_at)
			 VALUES('0000','$from','$para','$recado', NOW())";
			
			
			if (mysqli_query($conexao, $sql)) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
			}
		
			echo "Recado Enviado!";
?>