<table class="table table-responsive" id="infos-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
        <th>Keywords</th>
        <th>Fone Central</th>
        <th>Fone 1</th>
        <th>Fone 2</th>
        <th>Email</th>
        <th>Email R</th>
        <th>Endereco</th>
        <th>Logo</th>
        <th>C Pre</th>
        <th>C Sec</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($infos as $info)
        <tr>
            <td>{!! $info->title !!}</td>
            <td>{!! $info->description !!}</td>
            <td>{!! $info->keywords !!}</td>
            <td>{!! $info->fone_central !!}</td>
            <td>{!! $info->fone_1 !!}</td>
            <td>{!! $info->fone_2 !!}</td>
            <td>{!! $info->email !!}</td>
            <td>{!! $info->email_r !!}</td>
            <td>{!! $info->endereco !!}</td>
            <td>{!! $info->logo !!}</td>
            <td>{!! $info->c_pre !!}</td>
            <td>{!! $info->c_sec !!}</td>
            <td>
                {!! Form::open(['route' => ['infos.destroy', $info->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('infos.show', [$info->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('infos.edit', [$info->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>