<table class="table table-responsive" id="tables-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tables as $table)
        <tr>
            <td>{!! $table->nome !!}</td>
            <td>
                {!! Form::open(['route' => ['tables.destroy', $table->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tables.show', [$table->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tables.edit', [$table->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>