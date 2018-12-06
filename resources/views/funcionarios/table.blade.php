<table class="table table-responsive" id="funcionarios-table">
    <thead>
        <tr>
            <th>Setor</th>
        <th>Nome</th>
        <th>Ramal</th>
        <th>Email</th>
        <th>Externo</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($funcionarios as $funcionario)
        <tr>
            <td>{!! $funcionario->setor !!}</td>
            <td>{!! $funcionario->nome !!}</td>
            <td>{!! $funcionario->ramal !!}</td>
            <td>{!! $funcionario->email !!}</td>
            <td>{!! $funcionario->externo !!}</td>
            <td>
                {!! Form::open(['route' => ['funcionarios.destroy', $funcionario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('funcionarios.show', [$funcionario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('funcionarios.edit', [$funcionario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>