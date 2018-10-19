<table class="table table-responsive" id="atendentes-table">
    <thead>
        <tr>
            <th>Nome Atendente</th>
        <th>Representante</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($atendentes as $atendente)
        <tr>
            <td>{!! $atendente->nome !!}</td>
            <td>{!! $atendente->representante !!}</td>
            <td>
                {!! Form::open(['route' => ['atendentes.destroy', $atendente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('atendentes.show', [$atendente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('atendentes.edit', [$atendente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>