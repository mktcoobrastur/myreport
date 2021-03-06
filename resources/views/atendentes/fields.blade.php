<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('representante', 'Representante:') !!}
    {!! Form::select('representante', array('nacionalvd' => 'NACIONAL VENDA DIRETA',
                                           'nacionalt' => 'NACIONAL TELEMARKETING',
                                           'realize' => 'REALIZE',
                                           'televenda' => 'TELEVENDA',
                                           'vladimir' => 'VLADIMIR CANGUSU'), '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('atendentes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
