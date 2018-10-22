<table class="table table-responsive" id="tritons-table">
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
    @foreach($tritons as $triton)
        <tr>
            <td>
                <?php if ($triton->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($triton->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($triton->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
            </td>
            <td>{!! $triton->tarefa !!}</td>
            <td>{!! substr($triton->acao, 0, 150) !!}</td>
            <td>
                <?php if ($triton->status == 'E') { echo "EM ESPERA"; } ?>
                <?php if ($triton->status == 'A') { echo "EM ANDAMENTO"; } ?>
                <?php if ($triton->status == 'F') { echo "FINALIZADO"; } ?>
            </td>
            <td>
                {!! Form::open(['route' => ['tritons.destroy', $triton->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarefas.show', [$triton->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarefas.edit', [$triton->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>