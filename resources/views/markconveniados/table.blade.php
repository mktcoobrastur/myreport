<table class="table table-responsive" id="markconveniados-table">
    <thead>
        <tr>
            <th>Convênio</th>
        <th>Nome</th>
        <th>Img</th>
        <th>Status</th>
            <th colspan="3">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach($markconveniados as $markconveniado)
        <tr>
            <td>{!! $markconveniado->convenio !!}</td>
            <td>{!! $markconveniado->nome !!}</td>
            <td>{!! $markconveniado->img !!}</td>
            <td>{!! $markconveniado->status !!}</td>
            <td>
                {!! Form::open(['route' => ['markconveniados.destroy', $markconveniado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('markconveniados.show', [$markconveniado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('markconveniados.edit', [$markconveniado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>