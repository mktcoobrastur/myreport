<!-- From Field >
<div class="form-group col-sm-6">
    {!! Form::label('from', 'From:') !!}
    {!! Form::text('from', null, ['class' => 'form-control']) !!}
</div-->

<input type="hidden" name="de" value="{!! auth()->user()->name !!}" />

<!-- To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to', 'Para:') !!}
    <select name="para" class="form-control">
<?php
        $conexao  = mysqli_connect("localhost","root","","sistema");
        $query    = "SELECT * FROM users";
        $query    = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($query)) {
?>
            <option value="<?php echo $linha['name']; ?>"><?php echo utf8_encode($linha['name']); ?> (<?php echo utf8_encode($linha['depto']); ?>)</option>
<?php
        }
?>
</select>
</div>

<!-- Recado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recado', 'Recado:') !!}
    {!! Form::text('recado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
<<<<<<< HEAD
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('recados.index') !!}" class="btn btn-default">Cancel</a>
=======
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('recados.index') !!}" class="btn btn-default">Cancelar</a>
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
</div>
