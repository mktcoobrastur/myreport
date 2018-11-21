<!-- Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel', 'Hotel:') !!}
    {!! Form::number('hotel', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto', 'Texto:') !!}
    {!! Form::textarea('texto', null, ['class' => 'form-control']) !!}
</div>

<!-- Obs Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('obs', 'Obs:') !!}
    {!! Form::textarea('obs', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1', '1:') !!}
    {!! Form::text('1', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2', '2:') !!}
    {!! Form::text('2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('laminas.index') !!}" class="btn btn-default">Cancel</a>
</div>
