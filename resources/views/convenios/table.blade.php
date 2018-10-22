<style type="text/css">
    .conveniosOut {
        float: left;
        width: 380px;
        height: 240px;
        background: #f0f0f0;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    .conveniosOut:hover {
        background: #f9f9f9;
    }
    .conveniosOut img {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        width: 180px;
        height: 130px;
    }
    .conveniosOut h4 {
        display: block;
        text-align: center;
    }
    .linkSite {
        display: block;
        height: 30px;
        line-height: 30px;
    }
</style>
@foreach($convenios as $convenio)

<div class="conveniosOut">
    <h4>{!! $convenio->nome !!}</h4>

    <img src="http://localhost/sistema/public/img/3.jpg" />
    <a class="linkSite" href="{!! $convenio->site !!}" target="blank">{!! $convenio->site !!}</a>
                {!! Form::open(['route' => ['convenios.destroy', $convenio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('convenios.show', [$convenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('convenios.edit', [$convenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
</div>
@endforeach