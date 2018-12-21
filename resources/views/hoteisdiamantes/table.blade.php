<table class="table table-responsive" id="hoteisdiamantes-table">
    <thead>
        <tr>
            <th>Cod</th>
            <th>Hotel</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th colspan="3" style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hoteisdiamantes as $hoteisdiamante)
        <tr>
            <td>{!! $hoteisdiamante->cod !!}</td>
            <td>{!! $hoteisdiamante->hotel !!}</td>
            <td>{!! $hoteisdiamante->estado !!}</td>
            <td>{!! $hoteisdiamante->cidade !!}</td>
            <td>
                {!! Form::open(['route' => ['hoteisdiamantes.destroy', $hoteisdiamante->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('hoteisdiamantes.show', [$hoteisdiamante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hoteisdiamantes.edit', [$hoteisdiamante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>