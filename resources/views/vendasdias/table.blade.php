<table class="table table-responsive" id="vendasdias-table">
    <thead>
        <tr>
            <th>Qnt</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vendasdias as $vendasdia)
        <tr>
            <td>{!! $vendasdia->qnt !!}</td>
            <td>
                {!! Form::open(['route' => ['vendasdias.destroy', $vendasdia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vendasdias.show', [$vendasdia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vendasdias.edit', [$vendasdia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>