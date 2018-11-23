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
<<<<<<< HEAD
                                           'telemarketing' => 'TELEMARKETING',
=======
                                           'telemarketing' => 'TELEVENDA',
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
                                           'lucasefreitas' => 'LUCAS E FREITAS',
                                           'vladimir' => 'VLADIMIR CANGUSU'), '', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('atendentes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
