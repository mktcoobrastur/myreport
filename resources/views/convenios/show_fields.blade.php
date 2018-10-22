<!-- Nome Field -->
<div class="form-group">
    <h2>{!! $convenio->nome !!}</h2>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <p>{!! $convenio->img !!}</p>
</div>

<!-- Site Field -->
<div class="form-group">
    {!! Form::label('site', 'Site:') !!}
    <p><a href="{!! $convenio->site !!}" target="blank">{!! $convenio->site !!}</a></p>
</div>

