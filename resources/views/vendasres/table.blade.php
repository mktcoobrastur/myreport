<table class="table table-responsive" id="vendasres-table">
    <thead>
        <tr>
            <th>Representante</th>
        <th>Qnt</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vendasres as $vendasre)
        <tr>
            <td>
                <?php
                    $con = new mysqli("localhost", "root", "", "sistema");
                    $consultaH = mysqli_query($con, "SELECT * FROM representantes where id = '$vendasre->representante'");
                    $lH = mysqli_fetch_array($consultaH);
                    echo $lH['nome'];
                ?>
            </td>
            <td>{!! $vendasre->qnt !!}</td>
            <td>
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
    </tbody>
</table>