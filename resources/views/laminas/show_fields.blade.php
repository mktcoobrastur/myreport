<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $lamina->id !!}</p>
</div>

<!-- Hotel Field -->
<div class="form-group">
    {!! Form::label('hotel', 'Hotel:') !!}
    <p>{!! $lamina->hotel !!}</p>
</div>

<!-- Texto Field -->
<div class="form-group">
    {!! Form::label('texto', 'Texto:') !!}
    <p>{!! $lamina->texto !!}</p>
</div>

<!-- Obs Field -->
<div class="form-group">
    {!! Form::label('obs', 'Obs:') !!}
    <p>{!! $lamina->obs !!}</p>
</div>

<!-- 1 Field -->
<div class="form-group">
    {!! Form::label('lamina11', 'Lâmina 1:') !!}
    <p>{!! $lamina->lamina1 !!}</p>
</div>

<!-- 2 Field -->
<div class="form-group">
    {!! Form::label('lamina12', 'Lâmina 2:') !!}
    <p>{!! $lamina->lamina2 !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Solicitado em:') !!}
    <p>{!! $lamina->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Última atualização:') !!}
    <p>{!! $lamina->updated_at !!}</p>
</div>