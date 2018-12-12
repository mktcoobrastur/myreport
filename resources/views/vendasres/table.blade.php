<table class="table table-responsive" id="vendasres-table">
    <thead>
        <tr>
            <th>Data</th>
            <th>Representante</th>
            <th style="text-align: center;">Qnt</th>
            <th colspan="3" style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vendasres as $vendasre)
        <tr>
        <td style="font-weight: bold; color: #165C80;"><?php echo date("d/m/Y", strtotime($vendasre->indice)); ?></td>
            <td>
                <?php
                    $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                    $consultaH = mysqli_query($con, "SELECT * FROM representantes where id = '$vendasre->representante'");
                    $lH = mysqli_fetch_array($consultaH);
                    echo $lH['nome'];
                ?>
            </td>
            <td style="font-weight: bold; color: #165C80; text-align: center;">{!! $vendasre->qnt !!}</td>
            <td style="text-align: right;">
                {!! Form::open(['route' => ['vendasres.destroy', $vendasre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vendasres.show', [$vendasre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vendasres.edit', [$vendasre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
                    $consultaTotal = mysqli_query($con, "SELECT SUM(qnt) qnt FROM vendasre");
                    $total = mysqli_fetch_array($consultaTotal);
                    ?>
                    Total: <?php echo $total['qnt'];
                ?>
            </th>
            <th colspan="3">&nbsp;</th>
        </tr>

    </tbody>
</table>