<table class="table table-responsive" id="departamentos-table">
    <thead>
        <tr>
            <th>Departamento</th>
        <th>Descrição</th>
        <th>Gerente</th>
            <th colspan="3" style="text-align: right;">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach($departamentos as $departamento)
        <tr>
            <td>{!! $departamento->depto !!}</td>
            <td>{!! $departamento->descricao !!}</td>
            <td>{!! $departamento->gerente !!}</td>
            <td>
                {!! Form::open(['route' => ['departamentos.destroy', $departamento->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('departamentos.show', [$departamento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('departamentos.edit', [$departamento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>