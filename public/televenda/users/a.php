<?php
    require           "../../televenda/conn.php";
    $user             = $_POST['user']; 
    $qnt              = $_POST['qnt']; 
    $plano            = $_POST['plano'];
    // Adiciona +1 no campo 'qnt_vendas' na tabela 'atendentes'.
    mysqli_query      ($con, "UPDATE atendentes SET qnt_vendas = qnt_vendas + 1 WHERE id = $user");
    // Cadastra venda
    mysqli_query      ($con, "INSERT INTO vendasdia (id, atendente, qnt, plano, created_at)
                                                VALUES('0000','$user','$qnt','$plano', CURDATE())");

    //header("Location:http://localhost/sistema/public/tarefas/$idChamado");
?>