<!-- Parceiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parceiro', 'Parceiro:') !!}
    {!! Form::text('parceiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Imagem:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('parceiros.index') !!}" class="btn btn-default">Cancelar</a>
</div>
