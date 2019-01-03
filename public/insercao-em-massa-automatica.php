<?php
			//$conexao = mysqli_connect("localhost","root","","sistema");
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

    	    for ($i=1; $i < 30; $i++) {
                
                //$sql = "UPDATE promocoes SET imgLamina = '$cod.jpg' where codigo = '$cod'";

				$sql = "INSERT INTO vendasre (indice, representante, qnt)
				VALUES('2018-12-$i',6,5)";

                if (mysqli_query($conn, $sql)) {
                    echo "";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

			echo "ok!";

			//header("Location:http://localhost/sistema/public/tarefas/$idChamado");
?>