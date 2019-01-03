<table class="table table-responsive" id="dashes-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Dap</th>
        <th>Content</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dashes as $dash)
        <tr>
            <td>{!! $dash->titulo !!}</td>
            <td>{!! $dash->dap !!}</td>
            <td>{!! $dash->content !!}</td>
            <td>
                {!! Form::open(['route' => ['dashes.destroy', $dash->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dashes.show', [$dash->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dashes.edit', [$dash->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>