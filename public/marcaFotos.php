<?php

    $id         = $_GET['id'];
    $redirect   = $_GET['item'];

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

        
        //$sql = "UPDATE promocoes SET imgLamina = '$cod.jpg' where codigo = '$cod'";
        $sql = "UPDATE galeria SET principal = '1' WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        

    header("Location:http://localhost/sistema/public/fotos/$redirect");
?>