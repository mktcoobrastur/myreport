<table class="table table-responsive" id="diamantes-table">
    <thead>
        <tr>
            <th>Página</th>
            <th colspan="3" style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($diamantes as $diamante)
        <tr>
            <td>{!! $diamante->pagina !!}</td>
            <td>
                {!! Form::open(['route' => ['diamantes.destroy', $diamante->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('diamantes.show', [$diamante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('diamantes.edit', [$diamante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>