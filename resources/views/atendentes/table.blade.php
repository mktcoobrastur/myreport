<table class="table table-responsive" id="atendentes-table">
    <thead>
        <tr>
            <th>Nome Atendente</th>
            <th>Representante</th>
            <th>Vendas Acumuladas</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($atendentes as $atendente)
        <tr>
            <td><i class="fa fa-user" aria-hidden="true"></i> &nbsp; &nbsp; <a href="{!! route('atendentes.show', [$atendente->id]) !!}">{!! $atendente->nome !!}</a></td>
            <td>{!! strtoupper($atendente->representante) !!}</td>
            <td style="text-align: center;">{!! $atendente->qnt_vendas !!}</td>
            <td>
                {!! Form::open(['route' => ['atendentes.destroy', $atendente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('atendentes.show', [$atendente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('atendentes.edit', [$atendente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

            <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th style="text-align: center;">
                <?php
                    $con = new mysqli("localhost", "root", "", "sistema");
                    $consultaTotal = mysqli_query($con, "SELECT SUM(qnt_vendas) qnt_vendas FROM atendentes");
                    $total = mysqli_fetch_array($consultaTotal);
                    ?>
                    Total: <?php echo $total['qnt_vendas'];
                ?>
            </th>
            <th colspan="3">&nbsp;</th>
        </tr>

    </tbody>
</table>

<?php
    $con = new mysqli("localhost", "root", "", "sistema");
    $consultaTotal = mysqli_query($con, "SELECT id, nome, qnt_vendas FROM atendentes");
    while($total = mysqli_fetch_array($consultaTotal)) {
        print_r($total).'<br />';
    }
?>
