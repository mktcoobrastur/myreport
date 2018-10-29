<?php
if (isset($_FILES['arquivos']) && !empty($_FILES['arquivos']['name']))
{


    $idChamado      = $_POST['idChamado'];
    $cod            = $_POST['codigo'];

    // CRIA PASTA COM O CÓDIGO DO HOTEL
// diretório de destino do arquivo
    define('DEST_DIR', __DIR__ . '/imghoteis/'.$cod);
    mkdir(__DIR__.'/imghoteis/'.$cod.'/', 0777, true);

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
    //$sql = "UPDATE promocoes SET imgLamina = '$anexo' WHERE codigo = '$idChamado'";

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
            $arquivo =  $arquivos['name'][$i];

        if (!move_uploaded_file($arquivos['tmp_name'][$i], DEST_DIR . '/' . $arquivos['name'][$i]))
        {
            echo "Erro ao enviar o arquivo: " . $arquivos['name'][$i];
        }
        $anexo          = $arquivos['name'][0];

        $sql = "INSERT INTO galeria (id, img, ref, cod)
        VALUES('0000','$arquivo','$idChamado','$cod')";
       
        if (mysqli_query($conn, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        //////////////////////////////
    }

       


            
            echo $total;
            echo "ok!";

        	header("Location:http://localhost/sistema/public/fotos/$idChamado");
}
?>