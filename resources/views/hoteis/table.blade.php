<table class="table table-responsive" id="hoteis-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Acao</th>
        <th>Departamento</th>
        <th>Status</th>
            <th colspan="3">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hoteis as $hotei)
        <tr>
            <td>{!! $hotei->prioridade !!}</td>
            <td>{!! $hotei->tarefa !!}</td>
            <td>{!! $hotei->acao !!}</td>
            <td>{!! $hotei->departamento !!}</td>
            <td>{!! $hotei->status !!}</td>
            <td>
                {!! Form::open(['route' => ['hoteis.destroy', $hotei->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hoteis.show', [$hotei->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hoteis.edit', [$hotei->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>