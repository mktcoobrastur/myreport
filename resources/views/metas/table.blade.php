<table class="table table-responsive" id="metas-table">
    <thead>
        <tr>
            <th>Mes</th>
        <th>Uteis</th>
        <th>Meta</th>
        <th>Representante</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($metas as $meta)
        <tr>
            <td>{!! $meta->mes !!}</td>
            <td>{!! $meta->uteis !!}</td>
            <td>{!! $meta->meta !!}</td>
            <td>{!! $meta->representante !!}</td>
            <td>
                {!! Form::open(['route' => ['metas.destroy', $meta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('metas.show', [$meta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('metas.edit', [$meta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>