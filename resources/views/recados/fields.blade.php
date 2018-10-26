<!-- From Field >
<div class="form-group col-sm-6">
    {!! Form::label('from', 'From:') !!}
    {!! Form::text('from', null, ['class' => 'form-control']) !!}
</div-->

<input type="hidden" name="from" value="{!! auth()->user()->name !!}" />

<!-- To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to', 'Para:') !!}
    {!! Form::text('to', null, ['class' => 'form-control']) !!}
</div>

<!-- Recado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recado', 'Recado:') !!}
    {!! Form::text('recado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('recados.index') !!}" class="btn btn-default">Cancel</a>
</div>
