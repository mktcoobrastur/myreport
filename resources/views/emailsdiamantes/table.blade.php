<table class="table table-responsive" id="emailsdiamantes-table">
    <thead>
        <tr>
            <th>Email</th>
            <th colspan="3" style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($emailsdiamantes as $emailsdiamante)
        <tr>
            <td>{!! $emailsdiamante->email !!}</td>
            <td>
                {!! Form::open(['route' => ['emailsdiamantes.destroy', $emailsdiamante->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('emailsdiamantes.show', [$emailsdiamante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('emailsdiamantes.edit', [$emailsdiamante->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>