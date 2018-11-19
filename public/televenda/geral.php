<?php

                  if(isset($_POST['submit'])) {
                    require "../televenda/conn.php";
                    //$data     = $_GET['data'];
                    $data = $_POST['mes'];
                    /*$partes = explode("-", $data);
                    $ano = $partes[0];
                    $mes = $partes[1];
                    $dia = $partes[2];*/

                    $currentWeekNumber = date($data,'W');
                    echo 'Week number:' . $currentWeekNumber;

                    $consulta = mysqli_query($con, "SELECT * FROM vendasdia where month(created_at) = $data;");
                    while($row = mysqli_fetch_array($consulta)) {
                      echo "<li>".$row['id']."</li>";
                    }
                  }
                  $ano;
                  $mes;
$consultaData = mysqli_query($con, "SELECT * FROM vendasdia where 
                   year(created_at) = $ano and 
                  month(created_at) = $mes");
while($rows = mysqli_fetch_array($consultaData)) {
  echo "<li>".$rows['atendente']."</li>";
}




?>

<form action="geral.php" method="post">
  <input type="date" name="mes">
  <input type="submit" name="submit" value="Ir">
</form>