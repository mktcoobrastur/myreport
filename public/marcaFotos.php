<?php

    $id         = $_GET['id'];
    $redirect   = $_GET['item'];
    $cod        = $_GET['cod'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $banco = "sistema";
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $banco);
    $conn2 = mysqli_connect($servername, $username, $password, $banco);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if (!$conn2) {
        die("Connection failed: " . mysqli_connect_error());
    }
        // ALTERA O ÍNDICE DAS DEMAIS;
        $sql2 = "UPDATE galeria SET principal = '0' WHERE id != $id AND cod = $cod";

        if (mysqli_query($conn2, $sql2)) {
            echo "ok";
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn); 
        }

        // TORNA A IMAGEM PRINCIPAL ########  ERRO!!  #########
        $sql = "UPDATE galeria SET principal = '1' WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
        }

        echo $redirect." - ".$id;

        header("Location:http://localhost/sistema/public/fotos/$redirect");
?>