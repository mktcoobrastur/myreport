<table class="table table-responsive" id="tritons-table">
    <thead>
        <tr>
            <th>Prioridade</th>
        <th>Tarefa</th>
        <th>Acao</th>
        <th>Departamento</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tritons as $triton)
        <tr>
            <td>{!! $triton->prioridade !!}</td>
            <td>{!! $triton->tarefa !!}</td>
            <td>{!! $triton->acao !!}</td>
            <td>{!! $triton->departamento !!}</td>
            <td>{!! $triton->status !!}</td>
            <td>
                {!! Form::open(['route' => ['tritons.destroy', $triton->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tritons.show', [$triton->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tritons.edit', [$triton->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>