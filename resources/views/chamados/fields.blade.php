<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone', 'Fone:') !!}
    {!! Form::text('fone', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivo', 'Motivo:') !!}
    {!! Form::text('motivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Mensagem Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mensagem', 'Mensagem:') !!}
    {!! Form::textarea('mensagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Entendimento Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('entendimento', 'Entendimento:') !!}
    {!! Form::textarea('entendimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Solucao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('solucao', 'Solucao:') !!}
    {!! Form::textarea('solucao', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('E' => 'ESPERA', 'A' => 'EM ANDAMENTO', 'F' => 'FINALIZADO'), 'N', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('chamados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
