<!-- Qnt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qnt', 'Total de Vendas do dia:') !!}
    {!! Form::text('qnt', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('representante', 'Representante:') !!}
    {!! Form::select('representante', array('nacionalvd' => 'NACIONAL VENDA DIRETA',
                                           'nacionalt' => 'NACIONAL TELEMARKETING',
                                           'realize' => 'REALIZE',
                                           'telemarketing' => 'TELEMARKETING',
                                           'lucasefreitas' => 'LUCAS E FREITAS',
                                           'vladimir' => 'VLADIMIR CANGUSU'), '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vendasdias.index') !!}" class="btn btn-default">Cancelar</a>
</div>
