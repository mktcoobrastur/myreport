<table class="table table-responsive" id="telemarketings-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Acao</th>
        <th>Departamento</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($telemarketings as $telemarketing)
        <tr>
            <td>{!! $telemarketing->prioridade !!}</td>
            <td>{!! $telemarketing->tarefa !!}</td>
            <td>{!! $telemarketing->acao !!}</td>
            <td>{!! $telemarketing->departamento !!}</td>
            <td>{!! $telemarketing->status !!}</td>
            <td>
                {!! Form::open(['route' => ['telemarketings.destroy', $telemarketing->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('telemarketings.show', [$telemarketing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('telemarketings.edit', [$telemarketing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>