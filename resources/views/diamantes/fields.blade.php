<!-- Pagina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pagina', 'Pagina:') !!}
    {!! Form::text('pagina', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo', 'Conteudo:') !!}
    {!! Form::textarea('conteudo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('diamantes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
 

<script src="http://webdesigner2/sistema/public/js/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'conteudo', {
    contentsCss: ['body {font-size: 14px; line-height: 24px; font-family: "Arial"}'],
    width: '900px',
    height: '700px',
    uiColor: '#ffffff'
});
</script>   