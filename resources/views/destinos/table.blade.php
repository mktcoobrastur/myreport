<table class="table table-responsive" id="destinos-table">
    <thead>
        <tr>
            <th style="width: 700px;">Destino</th>
            <th>Última Atualização</th>
            <th style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($destinos as $destinos)
        <tr>
            <td>{!! $destinos->destino !!}</td>
            <td><?php echo date("d/m/Y", strtotime($destinos->updated_at)); ?></td>
            <td>
                {!! Form::open(['route' => ['destinos.destroy', $destinos->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('destinos.show', [$destinos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('destinos.edit', [$destinos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>