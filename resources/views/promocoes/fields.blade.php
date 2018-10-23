<!-- Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel', 'Hotel:') !!}
    {!! Form::text('hotel', null, ['class' => 'form-control']) !!}
</div>

<!-- Resumo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resumo', 'Resumo:') !!}
    {!! Form::text('resumo', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Plano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plano', 'Plano:') !!}
    {!! Form::text('plano', null, ['class' => 'form-control']) !!}
</div>

<!-- Imgprincipal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imgPrincipal', 'Imgprincipal:') !!}
    {!! Form::text('imgPrincipal', null, ['class' => 'form-control']) !!}
</div>

<!-- Imglamina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imgLamina', 'Imglamina:') !!}
    {!! Form::text('imgLamina', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('promocoes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
