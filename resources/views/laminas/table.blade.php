<table class="table table-responsive" id="laminas-table">
    <thead>
        <tr>
            <th>Hotel</th>
        <th>Texto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($laminas as $lamina)
        <tr>
            <td>{!! $lamina->hotel !!}</td>
            <td>{!! $lamina->texto !!}</td>
            <td>
                {!! Form::open(['route' => ['laminas.destroy', $lamina->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('laminas.show', [$lamina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('laminas.edit', [$lamina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>