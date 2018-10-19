<table class="table table-responsive" id="telemarketings-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Ação</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($telemarketings as $telemarketing)
        <tr>
            <td>{!! $telemarketing->prioridade !!}</td>
            <td>{!! $telemarketing->tarefa !!}</td>
            <td>{!! $telemarketing->acao !!}</td>
            <td>{!! $telemarketing->status !!}</td>
            <td>
                {!! Form::open(['route' => ['telemarketings.destroy', $telemarketing->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarefas.show', [$telemarketing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarefas.edit', [$telemarketing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>