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
    
    // IMAGENS
    $caminho = "A:/01 - COOBRASTUR/03 - Revistas/Revista 2017/Links/";
    $AL = "\r\n<sflag href='".$caminho."AL.jpg'/> \r\n \r\n"; // ALAGOAS
    $AC = "\r\n<sflag href='".$caminho."AC.jpg'/> \r\n \r\n"; // ACRE
    $AM = "\r\n<sflag href='".$caminho."AM.jpg'/> \r\n \r\n"; // AMAZONAS
    $AP = "\r\n<sflag href='".$caminho."AP.jpg'/> \r\n \r\n"; // AMAPÁ
    $BA = "\r\n<sflag href='".$caminho."BA.jpg'/> \r\n \r\n"; // BAHIA
    $CE = "\r\n<sflag href='".$caminho."CE.jpg'/> \r\n \r\n"; // CEARÁ
    $DF = "\r\n<sflag href='".$caminho."DF.jpg'/> \r\n \r\n"; // DISTRITO FEDERAL
    $ES = "\r\n<sflag href='".$caminho."ES.jpg'/> \r\n \r\n"; // ESPÍRITO SANTO
    $GO = "\r\n<sflag href='".$caminho."GO.jpg'/> \r\n \r\n"; // GOIÁS
    $MA = "\r\n<sflag href='".$caminho."MA.jpg'/> \r\n \r\n"; // MARANHÃO
    $MG = "\r\n<sflag href='".$caminho."MG.jpg'/> \r\n \r\n"; // MINAS GERAIS
    $MA = "\r\n<sflag href='".$caminho."MA.jpg'/> \r\n \r\n"; // MARANHÃO
    $MS = "\r\n<sflag href='".$caminho."MS.jpg'/> \r\n \r\n"; // MATO GROSSO DO SUL
    $MT = "\r\n<sflag href='".$caminho."MT.jpg'/> \r\n \r\n"; // MATO GROSSO
    $PA = "\r\n<sflag href='".$caminho."PA.jpg'/> \r\n \r\n"; // PARÁ
    $PB = "\r\n<sflag href='".$caminho."PB.jpg'/> \r\n \r\n"; // PARAÍBA
    $PE = "\r\n<sflag href='".$caminho."PE.jpg'/> \r\n \r\n"; // PERNAMBUCO
    $PI = "\r\n<sflag href='".$caminho."PI.jpg'/> \r\n \r\n"; // PIAUÍ
    $PR = "\r\n<sflag href='".$caminho."PR.jpg'/> \r\n \r\n"; // PARANÁ
    $RJ = "\r\n<sflag href='".$caminho."RJ.jpg'/> \r\n \r\n"; // RIO DE JANEIRO
    $RN = "\r\n<sflag href='".$caminho."RN.jpg'/> \r\n \r\n"; // RIO GRANDE DO NORTE
    $RO = "\r\n<sflag href='".$caminho."RO.jpg'/> \r\n \r\n"; // RONDÔNIA
    $RR = "\r\n<sflag href='".$caminho."RR.jpg'/> \r\n \r\n"; // RORAIMA
    $RS = "\r\n<sflag href='".$caminho."RS.jpg'/> \r\n \r\n"; // RIO GRANDE DO SUL
    $SC = "\r\n<sflag href='".$caminho."SC.jpg'/> \r\n \r\n"; // SANTA CATARINA
    $SE = "\r\n<sflag href='".$caminho."SE.jpg'/> \r\n \r\n"; // SERGIPE
    $SP = "\r\n<sflag href='".$caminho."SE.jpg'/> \r\n \r\n"; // SÃO PAULO
    $TO = "\r\n<sflag href='".$caminho."TO.jpg'/> \r\n \r\n"; // TOCANTINS

while( !feof($arquivo)){

//pega linha por linha e armazenda dentro da variavel $linha
$linha = fgets($arquivo);
    //exibe na tela as linhas do arquivo na tela 
    $partes = explode(';', utf8_encode($linha)); // separa o que tiver antes e depois do ponto e vírgula
    $xml .= "\r\n <state> \r\n";
    $xml .= "<sflag/> \r\n";
    $xml .= "<sflag/> \r\n";
    $xml .= "<cname>.  \r\n";
    $xml .= "</cname> \r\n";
    
    if($partes[3] == 'AL') { $xml .= $AL; }
    if($partes[3] == 'AC') { $xml .= $AC; }
    if($partes[3] == 'AM') { $xml .= $AM; }
    if($partes[3] == 'AP') { $xml .= $AP; }
    if($partes[3] == 'BA') { $xml .= $BA; }
    if($partes[3] == 'CE') { $xml .= $CE; }
    if($partes[3] == 'DF') { $xml .= $DF; }
    if($partes[3] == 'ES') { $xml .= $ES; }
    if($partes[3] == 'GO') { $xml .= $GO; }
    if($partes[3] == 'MA') { $xml .= $MA; }
    if($partes[3] == 'MG') { $xml .= $MG; }
    if($partes[3] == 'MA') { $xml .= $MA; }
    if($partes[3] == 'MS') { $xml .= $MS; }
    if($partes[3] == 'MT') { $xml .= $MT; }
    if($partes[3] == 'PA') { $xml .= $PA; }
    if($partes[3] == 'PE') { $xml .= $PE; }
    if($partes[3] == 'PB') { $xml .= $PB; }
    if($partes[3] == 'PI') { $xml .= $PI; }
    if($partes[3] == 'PR') { $xml .= $PR; }
    if($partes[3] == 'RJ') { $xml .= $RJ; }
    if($partes[3] == 'RN') { $xml .= $RN; }
    if($partes[3] == 'RO') { $xml .= $Ro; }
    if($partes[3] == 'RR') { $xml .= $RR; }
    if($partes[3] == 'RS') { $xml .= $RS; }
    if($partes[3] == 'SC') { $xml .= $SC; }
    if($partes[3] == 'SE') { $xml .= $SE; }
    if($partes[3] == 'SP') { $xml .= $SP; }
    if($partes[3] == 'TO') { $xml .= $TO; }
    $xml .= "<sflag/> \r\n \r \n";
    $xml .= "</state> \r\n \r \n \r\n \r\n";


    $xml .= "<state> \r\n";
    $xml .= "<sflag/> \r\n";
    $xml .= "<city> \r\n";
    $xml .= "<cname> \r\n";
    $xml .= $partes[2]." \r\n"; // cidade
    $xml .= "</cname> \r\n";
    $xml .= "</city> \r\n";
    $xml .= "<hotel> \r\n";
    $xml .= "<hname> \r\n";
    $xml .= $partes[1]; // nome do hotel
    $xml .= "</hname> \r\n";
    $xml .= "</hotel> \r\n";
    $xml .= "<description> \r\n";
    $xml .= "<hdescription> \r\n";
    //$xml .= $partes[3]." \r\n"; // estado
    $xml .= $partes[4]." \r\n"; // rua e numero
    $xml .= $partes[5]." \r\n"; // bairro
    $xml .= $partes[9]." \r\n"; // site
    $xml .= "</hdescription> \r\n \r\n";
    $xml .= "<itemhname>Caracteristicas:</itemhname> \r\n";
    $xml .= "<itemh> \r\n";
    $xml .= $partes[10]; // itens
    $xml .= $partes[11]." \r\n"; // itens 2
    $xml .= "</itemh> \r\n ";
    $xml .= "</description> \r\n";
    $xml .= "</state> \r\n \r\n";
//echo utf8_encode($linha)."<br /><br />";

}
$xml .= "</".$rede."> \r\n";
$xml .= "</root> \r\n";

$xmlfinal = str_replace('&', 'e', $xml);


//fechamos o arquivo
$nome = explode(strrchr($documento,"."),$documento);

//echo "<a href='http://webdesigner2/sistema/public/".$nome[0].".xml'>".$nome[0].'.xml</a>';

$arqxml = "$nome[0]".'.xml';
// Escreve o arquivo
file_put_contents($arqxml,utf8_decode($xmlfinal));

header("Location:http://webdesigner2/sistema/public/converter?arq=$arqxml");
?>
</div>

