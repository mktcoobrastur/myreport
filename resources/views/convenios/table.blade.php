<style type="text/css">
    .conveniosOut {
        float: left;
        width: 180px;
        height: 180px;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        border-top: 4px solid #3C8CBB;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
    }
    .conveniosOut a {
        background: #fff;
        border: 0;
    }
    .conveniosOut:hover {
    }
    .conveniosOut img {
        border: 1px solid #f0f0f0;
        background: #ffffff;
        border-radius: 5px;
        padding: 5px;
        width: 130px;
        height: 80px;
        margin-bottom: 16px;
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
<a href="{!! route('convenios.show', [$convenio->id]) !!}" class='btn btn-default btn-xs'><h4>{!! strtoupper($convenio->nome) !!}</h4>

        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * FROM convenios WHERE id = $convenio->id;";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
			<img src="<?php echo $_ENV['APP_URL']; ?>imgconvenios/<?php echo $linha['img']; ?>" alt="<?php echo $linha['nome']; ?>" /></a>
		</a>

	    <?php } ?>

                {!! Form::open(['route' => ['convenios.destroy', $convenio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('convenios.show', [$convenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('convenios.edit', [$convenio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
</div>
@endforeach