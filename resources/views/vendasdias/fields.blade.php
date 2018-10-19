<!-- Qnt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qnt', 'Total de Vendas do dia:') !!}
    {!! Form::text('qnt', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendasdias.index') !!}" class="btn btn-default">Cancel</a>
</div>
