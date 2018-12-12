@extends('layouts.app')

@section('content')
<div class="alert">
    <div class="content-header">
    <h1>Histórico de Chamados</h1>
    </div><br />
    <div class="box" style="padding: 10px;">
    <table class="table table-responsive" id="chamados-table" style="color: #333;">
    <thead>
        <tr>
        <th>&nbsp;</th>
        <th>Usuário</th>
        <th>Email</th>
        <th>Motivo</th>
        <th>Mensagem</th>
        <th>Status</th>
        <th>Data</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>

<?php
        $cpf = $_GET['cpf'];
        $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
        $query    = "SELECT * FROM chamados WHERE cpf = '$cpf' ORDER BY id DESC;";
        $query    = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($query)) {

?>

        <tr>
            <td><i class="fa fa-handshake-o"></i></td>
            <td><a class="btn" href="http://webdesigner2/sistema/public/chamados/<?php echo $linha['id']; ?>/edit" style="color: #333; text-decoration: none;"><?php echo utf8_encode($linha['usuario']); ?></a></td>
            <td><?php echo $linha['email']; ?></td>
            <td><b class='btn btn-default btn-xs'><?php echo $linha['motivo']; ?></b></td>
            <td><?php echo utf8_encode(substr($linha['mensagem'], 0, 150)); ?>...</td>
            <td><?php echo strtoupper($linha['status']); ?></td>
            <td><?php echo strtoupper($linha['created_at']); ?></td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('chamados.edit', [$linha['id']]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye" aria-hidden="true"></i></a>
                </div>
            </td>
        </tr>

<?php
        }
?>
    </tbody>
</table>
    </div>
</div>


@endsection