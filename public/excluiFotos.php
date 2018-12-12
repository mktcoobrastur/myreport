<?php

    $id         = $_GET['id'];
    $redirect   = $_GET['item'];

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

    $conexao  = mysqli_connect("localhost","root","","sistema");
    $query    = "SELECT * from promocoes";
    $query    = mysqli_query($conexao, $query);
    
    while ($linha = mysqli_fetch_array($query)) {
        
        $cod = $linha['codigo'];
        $hotel = $linha['hotel'];
        //$sql = "UPDATE promocoes SET imgLamina = '$cod.jpg' where codigo = '$cod'";
        //$sql = "UPDATE promocoes SET imgLamina = '$anexo' WHERE codigo = '$idChamado'";
        $sql = "DELETE FROM galeria WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }


    header("Location:http://webdesigner2/sistema/public/fotos/$redirect");

?>