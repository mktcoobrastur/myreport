<table class="table table-responsive" id="tconvenios-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Ação</th>
        <th>Departamento</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tconvenios as $tconvenio)
        <tr>
            <td>
                <?php if ($tconvenio->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($tconvenio->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($tconvenio->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
            </td>

            <td>{!! $tconvenio->tarefa !!}</td>
            <td>{!! $tconvenio->acao !!}</td>
            <td>{!! $tconvenio->departamento !!}</td>
            <td>
                <?php if ($tconvenio->status == 'E') { echo "EM ESPERA"; } ?>
                <?php if ($tconvenio->status == 'A') { echo "EM ANDAMENTO"; } ?>
                <?php if ($tconvenio->status == 'F') { echo "FINALIZADO"; } ?>
            </td>
            <td>
                {!! Form::open(['route' => ['tconvenios.destroy', $tconvenio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tconvenios.show', [$tconvenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tconvenios.edit', [$tconvenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>