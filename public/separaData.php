<?php
    $json_file = file_get_contents("http://127.0.0.1:8000/sync.js");   
    $json_str = json_decode($json_file, true);
    $itens = $json_str[0];
    
    foreach ( $itens as $e ) 
        { echo $e[0]."<br>"; } 
?>
