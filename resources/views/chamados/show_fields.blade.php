<style type="text/css">
    .box1 {
        float: left;
        width: 220px;
        height: 40px;
        line-height: 30px;
        margin: 5px;
        padding: 5px;
        font-size: 15px;
        border: 1px dashed #9AC5DE;
    }
    .nome { width: 400px; }
    .boxId {
        float: left;
        width: 80px;
        height: 40px;
        margin: 5px;
        padding: 5px;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        background: #3C8BBA;
    }
    .borda {
        border: 1px dashed #9AC5DE;
    }
    .box2 {
        border: 1px dashed #9AC5DE;
        margin: 5px;
        padding: 5px;
        width: 99%;
    }
</style>
<!-- Id Field -->
<div class="boxId">
    {!! $chamado->id !!}
</div>

<!-- Usuario Field -->
<div class="box1 nome">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! $chamado->usuario !!}
</div>

<!-- Cpf Field -->
<div class="box1">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! $chamado->cpf !!}
</div>

<!-- Fone Field -->
<div class="box1">
    {!! Form::label('fone', 'Fone:') !!}
    {!! $chamado->fone !!}
</div>

<!-- Motivo Field -->
<div class="box1">
    {!! Form::label('motivo', 'Motivo:') !!}
    {!! $chamado->motivo !!}
</div>

    <div style="clear: both;"></div>

    <!-- Email Field -->
<div class="box2">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $chamado->email !!}</p>
</div>

<!-- Mensagem Field -->
<div class="box2">
    {!! Form::label('mensagem', 'Mensagem:') !!}
    <p>{!! nl2br($chamado->mensagem) !!}</p>
</div>

<!-- Entendimento Field -->
<div class="box2">
    {!! Form::label('entendimento', 'Entendimento:') !!}
    <p>{!! nl2br($chamado->entendimento) !!}</p>
</div>

<!-- Solucao Field -->
<div class="box2">
    {!! Form::label('solucao', 'Solucao:') !!}
    <p>{!! nl2br($chamado->solucao) !!}</p>
</div>

<!-- Status Field -->
<div class="box2">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $chamado->status !!}</p>
</div>

<!-- Created At Field -->
<div class="box2">
    {!! Form::label('created_at', 'Abertura do Chamado:') !!}
    <p>{!! $chamado->created_at !!}</p>
</div>