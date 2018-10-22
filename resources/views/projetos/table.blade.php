<table class="table table-responsive" id="projetos-table">
    <thead>
        <tr>
        <th>Prioridade</th>
        <th>Projeto</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projetos as $projeto)
        <tr>
            <td>
                <?php if ($projeto->prioridade == 'B') { echo "<span class='badge badge-success' style='background:#D8D20A;'>BAIXA</span>"; } ?>
                <?php if ($projeto->prioridade == 'N') { echo "<span class='badge badge-warning' style='background:#679419;'>NORMAL</span>"; } ?>
                <?php if ($projeto->prioridade == 'A') { echo "<span class='badge badge-danger' style='background:#CE0005;'>ALTA</span>"; } ?>
            </td>

            <td>{!! $projeto->tarefa !!}</td>
            <td>
                <?php if ($projeto->status == 'E') { echo "EM ESPERA"; } ?>
                <?php if ($projeto->status == 'A') { echo "EM ANDAMENTO"; } ?>
                <?php if ($projeto->status == 'F') { echo "FINALIZADO"; } ?>
            </td>
            <td>
                {!! Form::open(['route' => ['projetos.destroy', $projeto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('projetos.show', [$projeto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('projetos.edit', [$projeto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>