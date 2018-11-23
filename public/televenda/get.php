<?php
    //Conecta com o banco via 'conn.php'
    require "conn.php";
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT id, nome, img, qnt_vendas FROM atendentes order by qnt_vendas DESC");
	while($res = mysqli_fetch_assoc($qryLista)){
?>
                        <li class='linha'>
                            <img class="img-circle ftAtendente" src="img/ft/<?php echo $res['img']; ?>" alt="" />
                            <span class="nomeV"><?php echo utf8_encode($res['nome']); ?></span>
                            <span class="pull-right nVendas">
                                <?php echo $res['qnt_vendas']; ?>
                            </span>
                        </li>
		<?php
        $dados[] = array_map('utf8_encode', $res); 
        //print_r($res);
    }
    //echo json_encode($dados);
?>