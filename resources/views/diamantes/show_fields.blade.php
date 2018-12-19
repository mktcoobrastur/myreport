<!-- Pagina Field -->
<div class="form-group">
    {!! Form::label('pagina', 'Pagina:') !!}
    <p>{!! $diamante->pagina !!}</p>
</div>

<!-- Conteudo Field -->
<div class="form-group" style="width: 900px; display: block;">
    {!! Form::label('conteudo', 'Conteudo:') !!}
    <p><?php echo $diamante->conteudo; ?></p>
</div>