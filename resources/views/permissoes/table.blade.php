<table class="table table-responsive" id="permissoes-table">
    <thead>
        <tr>
            <th>Id</th>
        <th>User</th>
        <th>Acesso</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permissoes as $permissoes)
        <tr>
            <td>{!! $permissoes->id !!}</td>
            <td>{!! $permissoes->user !!}</td>
            <td>{!! $permissoes->acesso !!}</td>
            <td>
                {!! Form::open(['route' => ['permissoes.destroy', $permissoes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permissoes.show', [$permissoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('permissoes.edit', [$permissoes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>