<table class="table table-responsive" id="basecontatos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Email</th>
        <th>Assunto</th>
        <th>Mensagem</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($basecontatos as $basecontato)
        <tr>
            <td>{!! $basecontato->nome !!}</td>
            <td>{!! $basecontato->email !!}</td>
            <td>{!! $basecontato->assunto !!}</td>
            <td>{!! $basecontato->mensagem !!}</td>
            <td>
                {!! Form::open(['route' => ['basecontatos.destroy', $basecontato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('basecontatos.show', [$basecontato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('basecontatos.edit', [$basecontato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>