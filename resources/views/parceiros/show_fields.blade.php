<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $parceiros->id !!}</p>
</div>

<!-- Parceiro Field -->
<div class="form-group">
    {!! Form::label('parceiro', 'Parceiro:') !!}
    <p>{!! $parceiros->parceiro !!}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <p><img src="../parceirosdiamante/{!! $parceiros->img !!}" /></p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{!! $parceiros->link !!}</p>
</div>