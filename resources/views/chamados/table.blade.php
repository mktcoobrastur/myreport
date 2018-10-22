<table class="table table-responsive" id="chamados-table">
    <thead>
        <tr>
            <th>Usuário</th>
        <th>Cpf</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Motivo</th>
        <th>Mensagem</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($chamados as $chamado)
        <tr>
            <td>{!! $chamado->usuario !!}</td>
            <td>{!! $chamado->cpf !!}</td>
            <td>{!! $chamado->email !!}</td>
            <td>{!! $chamado->fone !!}</td>
            <td>{!! $chamado->motivo !!}</td>
            <td>{!! $chamado->mensagem !!}</td>
            <td>{!! $chamado->status !!}</td>
            <td>
                {!! Form::open(['route' => ['chamados.destroy', $chamado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('chamados.show', [$chamado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('chamados.edit', [$chamado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>