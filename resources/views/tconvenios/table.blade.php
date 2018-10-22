<table class="table table-responsive" id="tconvenios-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Ação</th>
        <th>Departamento</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tconvenios as $tconvenio)
        <tr>
            <td>{!! $tconvenio->prioridade !!}</td>
            <td>{!! $tconvenio->tarefa !!}</td>
            <td>{!! $tconvenio->acao !!}</td>
            <td>{!! $tconvenio->departamento !!}</td>
            <td>{!! $tconvenio->status !!}</td>
            <td>
                {!! Form::open(['route' => ['tconvenios.destroy', $tconvenio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tconvenios.show', [$tconvenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tconvenios.edit', [$tconvenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>