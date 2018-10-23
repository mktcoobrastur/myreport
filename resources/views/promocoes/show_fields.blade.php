<style type="text/css">
    .boxStatus {
        float: left;
        background: #f0f0f0;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        width: 250px;
        height: 50px;
        line-height: 30px;
        border: 1px dashed #c9c9c9;
    }
</style>
<!-- Codigo Field -->
<div class="boxStatus">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! $promocoe->codigo !!}
</div>

<!-- Estado Field -->
<div class="boxStatus">
    {!! Form::label('estado', 'Estado:') !!}
    {!! $promocoe->estado !!}
</div>

<!-- Plano Field -->
<div class="boxStatus">
    {!! Form::label('plano', 'Plano:') !!}
    <?php if ($promocoe->plano == '1') { echo "DIAMANTE"; } ?>
    <?php if ($promocoe->plano == '2') { echo "GOLD"; } ?>
    <?php if ($promocoe->plano == '3') { echo "CONVENCIONAL"; } ?>

</div>

<!-- Created At Field -->
<div class="boxStatus">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $promocoe->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="boxStatus">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{!! $promocoe->updated_at !!}</p>
</div>

    <div style="clear: both;"></div>

<!-- Hotel Field -->
<div class="form-group">
    {!! Form::label('hotel', 'Hotel:') !!}
    <p>{!! $promocoe->hotel !!}</p>
</div>

<!-- Resumo Field -->
<div class="form-group">
    {!! Form::label('resumo', 'Resumo:') !!}
    <p>{!! $promocoe->resumo !!}</p>
</div>

<!-- Imgprincipal Field -->
<div class="form-group">
    {!! Form::label('imgPrincipal', 'Imgprincipal:') !!}
    <p>{!! $promocoe->imgPrincipal !!}</p>
</div>

<!-- Imglamina Field -->
<div class="form-group">
    {!! Form::label('imgLamina', 'Imglamina:') !!}
    <p>{!! $promocoe->imgLamina !!}</p>
</div>