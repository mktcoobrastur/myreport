<!-- Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mes', 'Mes:') !!}
    {!! Form::select('mes', array('01' => 'Janeiro',
                                           '02' => 'Fevereiro',
                                           '03' => 'Março',
                                           '04' => 'Abril',
                                           '05' => 'Maio',
                                           '06' => 'Junho',
                                           '07' => 'Julho',
                                           '08' => 'Agosto',
                                           '09' => 'Setembro',
                                           '10' => 'Outubro',
                                           '11' => 'Novembro',
                                           '12' => 'Dezembro'), '', ['class' => 'form-control']) !!}
</div>

<!-- Uteis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uteis', 'Dias Úteis:') !!}
    {!! Form::text('uteis', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta', 'Meta:') !!}
    {!! Form::text('meta', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Field -->
<select name="representante" class="form-control">
<?php
    //Consulta SELECT representantes
    $con = new mysqli("localhost", "root", "", "sistema");
    $consulta = mysqli_query($con, "SELECT * FROM representantes ORDER BY id ASC");
    while ($l = mysqli_fetch_array($consulta)) {
?>
    <option value="<?php echo $l['id']; ?>"><?php echo $l['nome']; ?></option>
<?php
    }
?>
    </select>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('metas.index') !!}" class="btn btn-default">Cancelar</a>
</div>