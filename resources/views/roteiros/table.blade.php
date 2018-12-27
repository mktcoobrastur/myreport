<table class="table table-responsive" id="roteiros-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Titulo</th>
        <th>Img</th>
        <th>Texto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($roteiros as $roteiros)
        <tr>
            <td>{!! $roteiros->nome !!}</td>
            <td>{!! $roteiros->titulo !!}</td>
            <td>{!! $roteiros->img !!}</td>
            <td>{!! $roteiros->texto !!}</td>
            <td>
                {!! Form::open(['route' => ['roteiros.destroy', $roteiros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('roteiros.show', [$roteiros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('roteiros.edit', [$roteiros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>