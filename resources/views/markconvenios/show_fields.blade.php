<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $markconvenio->nome !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>
    <?php if ($markconvenio->status == 'A') { echo "ATIVO"; } ?>
    <?php if ($markconvenio->status == 'D') { echo "DESATIVADO"; } ?></p>
</div>

        <?php
            $convenio = $markconvenio->id;
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            //query1
            $query    = "SELECT * FROM markconveniados WHERE convenio = '$convenio'";
            $query    = mysqli_query($conexao, $query);
            while ($linha = mysqli_fetch_array($query)) {
            ?>
                <div class="tabelaM">
                <a href=""><?php echo utf8_encode(strtoupper($linha['nome'])); ?></a><br />
                </div>
	    <?php } ?> 
        <br />