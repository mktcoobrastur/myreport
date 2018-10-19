<table class="table table-responsive" id="relacionamentos-table">
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
    @foreach($relacionamentos as $relacionamentos)
        <tr>
            <td>{!! $relacionamentos->prioridade !!}</td>
            <td>{!! $relacionamentos->tarefa !!}</td>
            <td>{!! $relacionamentos->acao !!}</td>
            <td>{!! $relacionamentos->status !!}</td>
            <td>
                {!! Form::open(['route' => ['relacionamentos.destroy', $relacionamentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarefas.show', [$relacionamentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarefas.edit', [$relacionamentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>