<table class="table table-responsive" id="parceiros-table">
    <thead>
        <tr>
            <th>Parceiro</th>
            <th>Link</th>
            <th style="text-align: center;">Imagem</th>
            <th colspan="3" style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($parceiros as $parceiros)
        <tr>
            <td>{!! $parceiros->parceiro !!}</td>
            <td>{!! $parceiros->link !!}</td>
            <td style="text-align: center;"><div style="margin: 0 auto; border: 1px solid #ccc; width: 180px;"><img src="parceirosdiamante/{!! $parceiros->img !!}" /></div></td>
            <td>
                {!! Form::open(['route' => ['parceiros.destroy', $parceiros->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('parceiros.show', [$parceiros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('parceiros.edit', [$parceiros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>