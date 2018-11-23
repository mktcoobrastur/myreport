<!-- Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel', 'Hotel:') !!}
    {!! Form::text('hotel', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Galeria Field -->
<!--div class="form-group col-sm-6">
    {!! Form::label('galeria', 'Galeria:') !!}
    {!! Form::text('galeria', null, ['class' => 'form-control']) !!}
</div-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
<<<<<<< HEAD
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fotos.index') !!}" class="btn btn-default">Cancel</a>
=======
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fotos.index') !!}" class="btn btn-default">Cancelar</a>
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
</div>