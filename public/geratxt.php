<?php
    //Consulta SELECT representantes
    $name = 'basediamante.txt';
    $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
    $consulta2 = mysqli_query($con, "SELECT * FROM newsdiamante ORDER BY id DESC");
    while ($l2 = mysqli_fetch_array($consulta2)) {
        $text .= $l2['email']."; \r\n";

    }

$file = fopen($name, 'w');
fwrite($file, $text);
fclose($file);

    header("Location:http://webdesigner2/sistema/public/emailsdiamantes");
?>