<table class="table table-responsive" id="representantes-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th style="text-align: center;">Vendas Acumuladas</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($representantes as $representante)
        <tr>
            <td>{!! $representante->nome !!}</td>
            <td style="text-align: center;">{!! $representante->qnt !!}</td>
            <td>
                {!! Form::open(['route' => ['representantes.destroy', $representante->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('representantes.show', [$representante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('representantes.edit', [$representante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

            <tr>
            <th>&nbsp;</th>
            <th style="text-align: center;">
                <?php
                    $con = new mysqli("localhost", "root", "", "sistema");
                    $consultaTotal = mysqli_query($con, "SELECT SUM(qnt) qnt FROM representantes");
                    $total = mysqli_fetch_array($consultaTotal);
                    ?>
                    Total: <?php echo $total['qnt'];
                ?>
            </th>
            <th colspan="3">&nbsp;</th>
        </tr>

    </tbody>
</table>