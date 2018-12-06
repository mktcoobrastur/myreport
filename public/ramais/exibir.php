<style>
.element {
    width: 90%;
    background: #D3ECD9;
    padding: 25px;
    border-radius: 4px;
    border: 1px solid #C2E5CB;
}
</style>
<?php
// Incluir aquivo de conexao
include("conn.php");

 
// Recebe a id enviada no metodo GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysqli_query($con, "SELECT * FROM funcionarios WHERE id = '".$id."'");
 
// Pega os dados e armazena em uma variavel
$noticia = mysqli_fetch_object($sql);
 
// Exibe o conteudo da notica
echo "<div class='element'>";
    echo "<b>Email:</b> ".$noticia->email."<br />";
    echo "<b>Ramal:</b> ".$noticia->ramal;
echo "</div>";
 
// Acentuacao
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>