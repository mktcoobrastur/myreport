<?php
$q=strtolower ($_GET["q"]);

$con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");

$sql = "SELECT * FROM promocoes WHERE hotel like '%" . $q . "%' OR codigo like '%" . $q . "%'";

$query = mysqli_query($con, $sql);

while($reg=mysqli_fetch_array($query)){
		echo utf8_encode($reg["hotel"])." Cod: ".$reg["codigo"]."|".$reg["hotel"]."s\n";
}
?>