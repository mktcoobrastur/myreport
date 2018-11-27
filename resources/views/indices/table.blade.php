<table class="table table-responsive" id="indices-table">
    <thead>
        <tr>
            <th>Mes</th>
        <th>Indice</th>
        <th>Periodoinicio</th>
        <th>Periodofinal</th>
        <th>Atendidas</th>
        <th>Voltarianegocio</th>
        <th>Solucao</th>
        <th>Reclamacoestotal</th>
        <th>Reclamacoesatendidas</th>
        <th>Reclamacoesnaoatendidas</th>
        <th>Temporesposta</th>
        <th>Notaconsumidor</th>
        <th>Avaliacoes</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($indices as $indice)
        <tr>
            <td>{!! $indice->mes !!}</td>
            <td><img src="{!! $indice->indice !!}" width="30" /></td>
            <td>{!! $indice->periodoinicio !!}</td>
            <td>{!! $indice->periodofinal !!}</td>
            <td>{!! $indice->atendidas !!}</td>
            <td>{!! $indice->voltarianegocio !!}</td>
            <td>{!! $indice->solucao !!}</td>
            <td>{!! $indice->reclamacoestotal !!}</td>
            <td>{!! $indice->reclamacoesatendidas !!}</td>
            <td>{!! $indice->reclamacoesnaoatendidas !!}</td>
            <td>{!! $indice->temporesposta !!}</td>
            <td>{!! $indice->notaconsumidor !!}</td>
            <td>{!! $indice->avaliacoes !!}</td>
            <td>
                {!! Form::open(['route' => ['indices.destroy', $indice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('indices.show', [$indice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('indices.edit', [$indice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>