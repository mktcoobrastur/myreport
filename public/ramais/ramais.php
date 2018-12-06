<!-- //*********************************************************************************
//*      Linguagem ....: PHP                                                      *
//*      Data .........: 17 de julho de 2018                                      *
//*      Sistema ......: LISTA DE RAMAIS, E-MAILS                                 *
//*      Cliente ......: COOBRASTUR VIAGENS E TURISMO                             *
//*      Programador ..: Monique G�ttert                                          *
//*      Colabora��o ..: Tha�s Braga	                                          *
//********************************************************************************* -->
<?php
	header('Content-Type: text/html; charset=iso-8859-1');
	include('config_inc.php');
	if(isset($_GET['tipo'])){
		$ordem = $_GET['tipo'];
	}else{$ordem = "a";}
	if (isset($_GET["un"])) {
		$empresa = $_GET["un"];
	}else{$empresa = "1";}
?>
<html>
	<head>
		<title>..:: Grupo Coobrastur ::: Ramais : E-mails ::..</title>
		<link href="estilo.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			td {
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size: 10pt;
				text-align: center;
				color: #333333;
			}
			a{
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size: 12pt;
				color: #fff;
				text-decoration: none;
			}
			a:hover {
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size: 10pt;
				color: #000000;
				text-decoration: none;
			}
			.titulo{
				font-size: 9pt;
				font-weight: bold;
				color: #666666;
			}
		</style>
	</head>
	<body marginleft='0' marginright='0' marginbottom='0' margintop='0' bgcolor='#FFFFFF'>
		<center>
			<table border='0' cellspacing='0' cellpadding='0' width='740' align='center'>
				<tr><td colspan='5'><img src='imagens/coobrastur_header.png'></td></tr>
				<tr>
					<td width='10'>&nbsp;</td>
					<td width='500'></td>
					<?php
						echo "<td width='80' align='right'><a href='ramais.php?tipo=a".$paramOrdem."'><img src='imagens/coobrastur_ordenacao_alfabetica.png' border='0' title='Ordem Alfab�tica'></a></td>";
						echo "<td width='90' align='right'><a href='ramais.php?tipo=d".$paramOrdem."'><img src='imagens/coobrastur_ordenacao_departamento.png' border='0' title='Ordem por Departamento'></a></td>";
					?>
					<td width='10'>&nbsp;</td>
				</tr>
			</table>
			<div style='width: 740px; background-color: #FFFFFF;'>
				<?php
					if($ordem=="a"){
						include('ramais_alfa.php');
					}else{
						include('ramais_dpto.php');
					}
				?>
			</div>
		</center>
	</body>
</html>