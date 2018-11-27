<!-- Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mes', 'Mes:') !!}
    {!! Form::text('mes', null, ['class' => 'form-control']) !!}
</div>

<!-- Indice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indice', 'Indice:') !!}
    {!! Form::text('indice', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodoinicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodoinicio', 'Periodoinicio:') !!}
    {!! Form::date('periodoinicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodofinal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodofinal', 'Periodofinal:') !!}
    {!! Form::date('periodofinal', null, ['class' => 'form-control']) !!}
</div>

<!-- Atendidas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atendidas', 'Atendidas:') !!}
    {!! Form::text('atendidas', null, ['class' => 'form-control']) !!}
</div>

<!-- Voltarianegocio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voltarianegocio', 'Voltarianegocio:') !!}
    {!! Form::text('voltarianegocio', null, ['class' => 'form-control']) !!}
</div>

<!-- Solucao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solucao', 'Solucao:') !!}
    {!! Form::text('solucao', null, ['class' => 'form-control']) !!}
</div>

<!-- Reclamacoestotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reclamacoestotal', 'Reclamacoestotal:') !!}
    {!! Form::text('reclamacoestotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Reclamacoesatendidas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reclamacoesatendidas', 'Reclamacoesatendidas:') !!}
    {!! Form::text('reclamacoesatendidas', null, ['class' => 'form-control']) !!}
</div>

<!-- Reclamacoesnaoatendidas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reclamacoesnaoatendidas', 'Reclamacoesnaoatendidas:') !!}
    {!! Form::text('reclamacoesnaoatendidas', null, ['class' => 'form-control']) !!}
</div>

<!-- Temporesposta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temporesposta', 'Temporesposta:') !!}
    {!! Form::text('temporesposta', null, ['class' => 'form-control']) !!}
</div>

<!-- Notaconsumidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notaconsumidor', 'Notaconsumidor:') !!}
    {!! Form::text('notaconsumidor', null, ['class' => 'form-control']) !!}
</div>

<!-- Avaliacoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avaliacoes', 'Avaliacoes:') !!}
    {!! Form::text('avaliacoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('indices.index') !!}" class="btn btn-default">Cancel</a>
</div>
