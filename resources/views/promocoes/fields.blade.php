<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', 'Solicitante:') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Validade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('validade', 'Validade:') !!}
    {!! Form::date('validade', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel', 'Hotel:') !!}
    {!! Form::text('hotel', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Resumo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resumo', 'Descrição:') !!}
    {!! Form::textarea('resumo', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Plano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plano', 'Plano:') !!}
    {!! Form::select('plano', array('1' => 'DIAMANTE', '2' => 'GOLD', '3' => 'CONVENCIONAL'), ['class' => 'form-control']) !!}<br /><br /><br />
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('promocoes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
