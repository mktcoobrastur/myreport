<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keywords', 'Keywords:') !!}
    {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone Central Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone_central', 'Fone Central:') !!}
    {!! Form::text('fone_central', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone_1', 'Fone 1:') !!}
    {!! Form::text('fone_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone_2', 'Fone 2:') !!}
    {!! Form::text('fone_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email Site:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email R Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_r', 'Email Form:') !!}
    {!! Form::text('email_r', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('endereco', 'Endereço:') !!}
    {!! Form::textarea('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::text('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- C Pre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_pre', 'Cor Predominante:') !!}
    {!! Form::color('c_pre', null, ['class' => 'form-control']) !!}
</div>

<!-- C Sec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_sec', 'Cor Secundária:') !!}
    {!! Form::color('c_sec', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('infos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
