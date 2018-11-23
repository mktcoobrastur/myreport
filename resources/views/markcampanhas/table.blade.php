<table class="table table-responsive" id="markcampanhas-table">
    <thead>
        <tr>
            <th>Conveniado</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($markcampanhas as $markcampanha)
        <tr>
            <td>{!! $markcampanha->conveniado !!}</td>
            <td>{!! $markcampanha->nome !!}</td>
            <td>{!! $markcampanha->descricao !!}</td>
            <td>{!! $markcampanha->img !!}</td>
            <td>{!! $markcampanha->status !!}</td>
            <td>
                {!! Form::open(['route' => ['markcampanhas.destroy', $markcampanha->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('markcampanhas.show', [$markcampanha->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('markcampanhas.edit', [$markcampanha->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>