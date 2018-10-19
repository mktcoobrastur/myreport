<!-- Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mes', 'Mes:') !!}
    {!! Form::text('mes', null, ['class' => 'form-control']) !!}
</div>

<!-- Uteis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uteis', 'Uteis:') !!}
    {!! Form::text('uteis', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta', 'Meta:') !!}
    {!! Form::text('meta', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('metas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
