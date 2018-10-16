<style type="text/css">
    .trHover:hover {
        background: #f9f9f9;
    }
</style>
<table class="table table-responsive" id="departamentos-table">
    <thead>
        <tr>
            <th>Departamento</th>
        <th>Gerente</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($departamentos as $departamentos)
        <tr class="trHover">
            <td>{!! $departamentos->departamento !!}</td>
            <td>{!! $departamentos->gerente !!}</td>
            <td>{!! $departamentos->status !!}</td>
            <td>
                {!! Form::open(['route' => ['departamentos.destroy', $departamentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('departamentos.show', [$departamentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('departamentos.edit', [$departamentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>