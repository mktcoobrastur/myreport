<table class="table table-responsive" id="negocios-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Ação</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($negocios as $negocios)
        <tr>
            <td>
                <?php if ($negocios->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($negocios->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($negocios->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
            </td>

            <td>{!! $negocios->tarefa !!}</td>
            <td>{!! substr($negocios->acao, 0, 150) !!}...</td>
            <td>
                <?php if ($negocios->status == 'E') { echo "EM ESPERA"; } ?>
                <?php if ($negocios->status == 'A') { echo "EM ANDAMENTO"; } ?>
                <?php if ($negocios->status == 'F') { echo "FINALIZADO"; } ?>
            </td>
            <td>
                {!! Form::open(['route' => ['negocios.destroy', $negocios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarefas.show', [$negocios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarefas.edit', [$negocios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>