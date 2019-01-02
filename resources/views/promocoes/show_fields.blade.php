<style type="text/css">
    .boxStatus {
        float: left;
        background: #f5f5f5;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        width: 250px;
        height: 50px;
        line-height: 30px;
        border: 1px dashed #c9c9c9;
    }
    .imgPromo {
        float: left;
        width: 400px;
        border: 1px dashed #c9c9c9;
        background: #f5f5f5;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
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
    {!! Form::label('created_at', 'Data criação:') !!}
    <p>{!! $promocoe->created_at !!}</p>
</div>

<!-- Validade At Field -->
<div class="boxStatus">
    {!! Form::label('validade', 'Valido até:') !!}
    <p>{!! $promocoe->validade !!}</p>
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
<div class="imgPromo">
    {!! Form::label('imgPrincipal', 'Imagem Principal:') !!}

        <!--#####################-->

        <p>

        <?php if ($promocoe->imgPrincipal != null) { ?>

		<a data-toggle="modal" data-target=".bd-example-modal-lg1" target="blank" class="anexos">
    		<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
	        <img width="20" style="float: right; color: #999; margin-left: 5px; cursor: pointer;" src="https://png.icons8.com/metro/1600/eye.png" />
			{!! $promocoe->imgPrincipal !!}
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

        <?php }?>

    </p>
        <!--#####################-->

</div>


    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img style="margin-left: 25%; margin-bottom: 5px;" width="300" src="<?php echo $_ENV['APP_URL']; ?>promo/{!! $promocoe->imgPrincipal !!}" />
            </div>
        </div>
    </div>

<!-- Imglamina Field -->
<div class="imgPromo">
    {!! Form::label('imgLamina', 'Lâmina:') !!}

    <p>

        <!--#####################-->

<?php if ($promocoe->imgLamina != null) { ?>

		<a data-toggle="modal" data-target=".bd-example-modal-lg2" target="blank" class="anexos">
            <img width="20" style="float: right; color: #999; margin-left: 5px; cursor: pointer;" src="https://png.icons8.com/metro/1600/eye.png" />
			<img width="20" src="https://png.icons8.com/metro/1600/attach.png" />
			{!! $promocoe->imgLamina !!}
            <i class="fa fa-download pull-right" style='margin-top: 4px;' aria-hidden="true"></i>
		</a>

<?php } ?>

    </p>

        <!--#####################-->


    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img style="margin-left: 5px; margin-bottom: 5px;" width="590" src="http://localhost/sistema/public/promoG/{!! $promocoe->imgLamina !!}" />
            </div>
        </div>
    </div>

        <!--#####################-->

            

</div>
<div style="clear: both;"></div>

<?php $next = $promocoe->id + 1; ?>
<a href="{!!$next!!}" class="btn btn-default">Próximo</a>