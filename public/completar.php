<?php
$q=strtolower ($_GET["q"]);

$con = new mysqli("localhost", "root", "", "sistema");

$sql = "SELECT * FROM promocoes WHERE hotel like '%" . $q . "%' OR codigo like '%" . $q . "%'";

$query = mysqli_query($con, $sql);

while($reg=mysqli_fetch_array($query)){
		echo utf8_encode($reg["hotel"])." - Cod: ".$reg["codigo"]."|".$reg["hotel"]."s\n";
}
?>