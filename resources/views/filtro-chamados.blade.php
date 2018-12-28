@extends('layouts.app')

@section('content')
<?php
if (isset($_GET['de_filtro'])) {

?>
<div class="alert">
<div class="content-header">
    <h4>Buscando entre <?php echo date("d/m/Y", strtotime($_GET['de_filtro'])); ?> e <?php echo date("d/m/Y", strtotime($_GET['ate_filtro'])); ?></h4>
    </div>
<div class="box box-primary" style="padding: 10px;">
<table class="table table-responsive" id="chamados-table">
    <thead>
        <tr>
        <th>&nbsp;</th>
        <th>Usuário</th>
        <th>Email</th>
        <th>Motivo</th>
        <th>Mensagem</th>
        <th>Status</th>
        <th>Quem está tratando</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>

<?php

        $de_filtro      = $_GET['de_filtro'];
        $ate_filtro     = $_GET['ate_filtro'];
        $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
        $query    = "SELECT * FROM chamados WHERE date > '$de_filtro' AND date < '$ate_filtro'";
        $query    = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($query)) {

?>

        <tr>
            <td><i class="fa fa-handshake-o"></i></td>
            <td><a href="<?php echo $_ENV['APP_URL']; ?>historico-chamados?cpf=<?php echo $linha['cpf']; ?>"><?php echo utf8_encode($linha['usuario']); ?></a></td>
            <td><?php echo $linha['email']; ?></td>
            <td><b class='btn btn-default btn-xs'><?php echo $linha['motivo']; ?></b></td>
            <td><?php echo utf8_encode(substr($linha['mensagem'], 0, 150)); ?>...</td>
            <td><?php echo strtoupper($linha['status']); ?></td>
            <td><?php echo $linha['atendente']; ?></td>
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
<?php

    }
?>
</div>
</div>
@endsection