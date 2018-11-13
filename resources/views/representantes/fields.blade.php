<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Qnt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qnt', 'Qnt:') !!}
    {!! Form::number('qnt', null, ['class' => 'form-control']) !!}
</div>

<!-- Deteled At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deteled_at', 'Deteled At:') !!}
    {!! Form::date('deteled_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('representantes.index') !!}" class="btn btn-default">Cancel</a>
</div>
