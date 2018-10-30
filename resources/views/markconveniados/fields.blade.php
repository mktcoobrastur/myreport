<?php
    if (isset($_GET['r'])) {
        $r      = $_GET['r'];
    }
?>
    <input type="hidden" name="convenio" class="form-control" value="<?php if (isset($_GET['r'])) { echo $r; } ?>"/>
<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::text('img', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! Form::select('status', array('A' => 'ATIVO', 'D' => 'DESATIVADO'), ['class' => 'form-control']) !!}</p>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="/markconvenios/<?php if (isset($_GET['r'])) { $r = $_GET['r']; echo $r; } ?>" class="btn btn-default">Voltar</a>
</div>