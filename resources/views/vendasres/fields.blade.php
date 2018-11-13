<!-- Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('representante', 'Representante:') !!}
    {!! Form::text('representante', null, ['class' => 'form-control']) !!}
</div>

<!-- Qnt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qnt', 'Qnt:') !!}
    {!! Form::number('qnt', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendasres.index') !!}" class="btn btn-default">Cancel</a>
</div>
