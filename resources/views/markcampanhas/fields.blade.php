<?php
    if (isset($_GET['c'])) {
        $c      = $_GET['c'];
    }
?>
<!-- Conveniado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conveniado', 'Conveniado:') !!}
    <input type="text" name="conveniado" class="form-control" value="<?php if (isset($_GET['c'])) { echo $c; } ?>"/>
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('markcampanhas.index') !!}" class="btn btn-default">Cancelar</a>   
</div>