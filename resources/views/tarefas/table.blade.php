<style type="text/css">
    .trHover:hover {
        background: #f9f9f9;
    }
</style>
<table class="table table-responsive" id="tarefas-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Departamento</th>
        <th>Criação</th>
        <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarefas as $tarefas)
        <tr class="trHover">
            
            <td>
                <?php if ($tarefas->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($tarefas->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($tarefas->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
            </td>
            <td>{!! $tarefas->tarefa !!}</td>
            <td>{!! $tarefas->departamento !!}</td>
            <td>{!! $tarefas->created_at->format('d/M/Y') !!}</td>
            <td>
                <?php if ($tarefas->status == 'E') { echo "EM ESPERA"; } ?>
                <?php if ($tarefas->status == 'A') { echo "EM ANDAMENTO"; } ?>
                <?php if ($tarefas->status == 'F') { echo "FINALIZADO"; } ?>
            </td>
            <td>
                {!! Form::open(['route' => ['tarefas.destroy', $tarefas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarefas.show', [$tarefas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarefas.edit', [$tarefas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>