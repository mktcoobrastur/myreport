<!-- Destino Field -->
<div class="form-group col-sm-12">
    {!! Form::label('destino', 'Destino:') !!}
    {!! Form::text('destino', null, ['class' => 'form-control']) !!}
</div>
<!-- Img Turismo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_turismo', 'Img Turismo:') !!}
    {!! Form::file('img_turismo', null, ['class' => 'form-control']) !!}
</div>
<!-- Pagina Turismo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pagina_turismo', 'Pagina Turismo:') !!}
    {!! Form::textarea('pagina_turismo', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Cultura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_cultura', 'Img Cultura:') !!}
    {!! Form::file('img_cultura', null, ['class' => 'form-control']) !!}
</div>

<!-- Pagina Cultura Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pagina_cultura', 'Pagina Cultura:') !!}
    {!! Form::textarea('pagina_cultura', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Noite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_noite', 'Img Noite:') !!}
    {!! Form::file('img_noite', null, ['class' => 'form-control']) !!}
</div>

<!-- Pagina Noite Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pagina_noite', 'Pagina Noite:') !!}
    {!! Form::textarea('pagina_noite', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('destinos.index') !!}" class="btn btn-default">Cancelar</a>
</div>

<script src="<?php echo $_ENV['APP_URL']; ?>js/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'pagina_turismo', {
    contentsCss: ['body {font-size: 14px; line-height: 24px; font-family: "Arial"}'],
    width: '900px',
    height: '700px',
    uiColor: '#3782AA'
});
CKEDITOR.replace( 'pagina_cultura', {
    contentsCss: ['body {font-size: 14px; line-height: 24px; font-family: "Arial"}'],
    width: '900px',
    height: '700px',
    uiColor: '#3782AA'
});
CKEDITOR.replace( 'pagina_noite', {
    contentsCss: ['body {font-size: 14px; line-height: 24px; font-family: "Arial"}'],
    width: '900px',
    height: '700px',
    uiColor: '#3782AA'
});
</script>