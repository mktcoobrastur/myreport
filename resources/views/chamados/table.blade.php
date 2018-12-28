<?php
if (isset($_GET['c'])) {

?>
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

        $c      = $_GET['c'];
        $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
        $query    = "SELECT * FROM chamados WHERE status = '$c';";
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

    } else {
?>

<table class="table table-responsive" id="chamados-table">
    <thead>
        <tr>
        <th>&nbsp;</th>
        <th>Usuário</th>
        <th>Motivo</th>
        <th>Mensagem</th>
        <th>Status</th>
        <th>Quem está tratando</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($chamados as $chamado)
        <tr>            
            <td><a href="{!! route('chamados.edit', [$chamado->id]) !!}" class='btn btn-primary btn-xs' alt="Atender Chamado"><i class="fa fa-handshake-o" aria-hidden="true"></i></a></td>
            <td><a href="<?php echo $_ENV['APP_URL']; ?>historico-chamados?cpf=<?php echo $chamado->cpf; ?>">{!! $chamado->usuario !!}</a></td>
            <td><b class='btn btn-default btn-xs'>{!! $chamado->motivo !!}</b></td>
            <td>{!! substr($chamado->mensagem, 0, 150) !!}...</td>
            <td>{!! strtoupper($chamado->status) !!}</td>
            <td>{!! $chamado->atendente !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('chamados.edit', [$chamado->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye" aria-hidden="true"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<?php } ?>

