<!-- Data Field -->
<div class="form-group col-sm-4">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::date('indice', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Field -->
<div class="form-group col-sm-4">
    {!! Form::label('representante', 'Representante:') !!}

                <select name="representante" class="form-control">
                <option>Escolha um Representante</option>
                <?php
                    $con = new mysqli("localhost", "root", "", "sistema");
                    $consulta = mysqli_query($con, "SELECT * FROM representantes ORDER BY id ASC");
                
                    while ($l = mysqli_fetch_array($consulta)) {
                ?>
                        <option value="<?php echo $l['id']; ?>">
                            <?php echo $l['nome']; ?>
                        </option>
                <?php
                    }
                ?>
            </select>


</div>

<!-- Qnt Field -->
<div class="form-group col-sm-4">
    {!! Form::label('qnt', 'Qnt:') !!}
    {!! Form::number('qnt', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendasres.index') !!}" class="btn btn-default">Cancelar</a>
</div>
