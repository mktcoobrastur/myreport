<table class="table table-responsive" id="destinosis-table">
    <thead>
        <tr>
            <th>Destino</th>
        <th>Estado</th>
        <th>Resumo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($destinosis as $destinosi)
        <tr>
            <td>{!! $destinosi->destino !!}</td>
            <td>{!! $destinosi->estado !!}</td>
            <td>{!! $destinosi->resumo !!}</td>
            <td>
                {!! Form::open(['route' => ['destinosis.destroy', $destinosi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('destinosis.show', [$destinosi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('destinosis.edit', [$destinosi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>