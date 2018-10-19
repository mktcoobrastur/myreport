<table class="table table-responsive" id="marketings-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Acao</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($marketings as $marketing)
        <tr>
            <td>{!! $marketing->prioridade !!}</td>
            <td>{!! $marketing->tarefa !!}</td>
            <td>{!! $marketing->acao !!}</td>
            <td>{!! $marketing->status !!}</td>
            <td>
                {!! Form::open(['route' => ['marketings.destroy', $marketing->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarefas.show', [$marketing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarefas.edit', [$marketing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>