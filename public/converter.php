<div style="font-family: sans-serif; font-size: 12px;">
<?php

define('DEST_DIR', __DIR__ . '/txt');
$rede = $_POST['rede'];
if (isset($_FILES['arquivos']) && !empty($_FILES['arquivos']['name']))
{
    // se o "name" estiver vazio, é porque nenhum arquivo foi enviado
     
    // cria uma variável para facilitar
    $arquivos = $_FILES['arquivos'];
 
    // total de arquivos enviados
    $total = 1;
    for ($i = 0; $i < $total; $i++)
    {

        if (!move_uploaded_file($arquivos['tmp_name'][$i], DEST_DIR . '/' . $arquivos['name'][$i]))
        {
            echo "Erro ao enviar o arquivo: " . $arquivos['name'][$i];
        }
    }
}

//o primeiro paramentro da função fopen é o caminho do seu txt e o segundo recebe o r
//informando que será  apenas para a leitura
$documento          = $arquivos['name'][0];
//desse modo funciona se o arquivo tiver um ponto no meio do nome tambem
$arquivo = fopen("http://webdesigner2/sistema/public/txt/$documento","r");

// a função feof verifica se o seu arquivo chegou ao fim , abaixo
//ele vai ler o arquivo txt quando o arquivo for diferente do fim 
$xml  = "<?xml version='1.0' encoding='UTF-8'?> \r\n";
$xml .="<root xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'> \r\n";

$xml .= "<".$rede."> \r\n";
while( !feof($arquivo)){

//pega linha por linha e armazenda dentro da variavel $linha
$linha = fgets($arquivo);
    //exibe na tela as linhas do arquivo na tela 
    $partes = explode(';', utf8_encode($linha)); // separa o que tiver antes e depois do ponto e vírgula
    $xml .= "<state> \r\n";
    $xml .= "<sflag/> \r\n";
    $xml .= "<city> \r\n";
    $xml .= "<cname> \r\n";
    $xml .= $partes[2]." \r\n"; // cidade
    $xml .= "</cname> \r\n";
    $xml .= "</city> \r\n";
    $xml .= "<hotel>";
    $xml .= "<hname>";
    $xml .= $partes[1]." \r\n"; // nome do hotel
    $xml .= "</hname>";
    $xml .= "</hotel> \r\n";
    $xml .= "<description> \r\n";
    $xml .= "<hdescription> \r\n";
    //$xml .= $partes[3]." \r\n"; // estado
    $xml .= $partes[4]." \r\n"; // rua e numero
    $xml .= $partes[5]." \r\n"; // bairro
    $xml .= $partes[9]; // site
    $xml .= "</hdescription> \r\n";
    $xml .= "<itemhname>Características:</itemhname> \r\n";
    $xml .= "<itemh> \r\n";
    $xml .= $partes[10].""; // itens
    $xml .= $partes[11]." \r\n"; // itens 2
    $xml .= "</itemh> \r\n";
    $xml .= "</description> \r\n";
    $xml .= "</state> \r\n \r\n";

//echo utf8_encode($linha)."<br /><br />";

}
$xml .= "</".$rede."> \r\n";
$xml .= "</root> \r\n \r\n";

$xmlfinal = str_replace('&', 'e', $xml);


//fechamos o arquivo
$nome = explode(strrchr($documento,"."),$documento);

//echo "<a href='http://webdesigner2/sistema/public/".$nome[0].".xml'>".$nome[0].'.xml</a>';

$arqxml = "$nome[0]".'.xml';
// Escreve o arquivo
file_put_contents($arqxml,$xmlfinal);

header("Location:http://webdesigner2/sistema/public/converter?arq=$arqxml");
?>
</div>

