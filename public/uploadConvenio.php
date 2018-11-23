<?php
<<<<<<< HEAD

$conexao = mysqli_connect("localhost","root","","sistema");

=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
// diretório de destino do arquivo
define('DEST_DIR', __DIR__ . '/imgconvenios');
 
if (isset($_FILES['arquivos']) && !empty($_FILES['arquivos']['name']))
{
    // se o "name" estiver vazio, é porque nenhum arquivo foi enviado
     
    // cria uma variável para facilitar
    $arquivos = $_FILES['arquivos'];
 
    // total de arquivos enviados
    $total = count($arquivos['name']);
    for ($i = 0; $i < $total; $i++)
    {
        // podemos acessar os dados de cada arquivo desta forma:
            // - $arquivos['name'][$i]
            // - $arquivos['tmp_name'][$i]
            // - $arquivos['size'][$i]
            // - $arquivos['error'][$i]
            // - $arquivos['type'][$i]

        if (!move_uploaded_file($arquivos['tmp_name'][$i], DEST_DIR . '/' . $arquivos['name'][$i]))
        {
            echo "Erro ao enviar o arquivo: " . $arquivos['name'][$i];
        }
    }

       

        $anexo = $arquivos['name'][0];
        $idChamado = $_POST['idChamado'];
        //$query = "UPDATE anexos SET anexo='$anexo' WHERE id=$idChamado";
        //$query = "INSERT INTO anexos (Id, anexo, id_anexo) VALUES('0000','$anexo','$idChamado')";




			
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



			
			
			 //$sql = "INSERT INTO anexos (id, anexo, tarefa) VALUES('0000','$anexo','$idChamado')";
             
             $query = "UPDATE convenios SET img='$anexo' WHERE id=$idChamado";
			
			
			if (mysqli_query($conn, $query)) {
				echo "";
			} else {
				echo "Error: " . $query . "<br>" . mysqli_error($conn);
			}
			

			//echo "ok!";
        	header("Location:convenios/$idChamado");




}
?>