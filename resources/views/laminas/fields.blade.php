<script type="text/javascript" src="/lib/jquery.bgiframe.min.js"></script>
<script type="text/javascript" src="/lib/jquery.ajaxQueue.js"></script>
<script type="text/javascript" src="/lib/thickbox-compressed.js"></script>
<script type="text/javascript" src="/lib/jquery.autocomplete.js"></script>
<!--css -->
<link rel="stylesheet" type="text/css" href="/lib/jquery.autocomplete.css"/>
<link rel="stylesheet" type="text/css" href="/lib/thickbox.css"/>

<script type="text/javascript">
 	$(document).ready(function(){
		$("#txtNome").autocomplete("http://127.0.0.1:8000/completar.php", {
			width:310,
			selectFirst: false
		});
	});
 </script>

<!-- Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel', 'Hotel:') !!}
    <input type="text" name="hotel" id="txtNome" class="form-control input_forms" >
</div>

<!-- Texto Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto', 'Texto:') !!}
    {!! Form::textarea('texto', null, ['class' => 'form-control']) !!}
</div>

<!-- Obs Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('obs', 'Obs:') !!}
    {!! Form::textarea('obs', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lamina1', 'Lamina 1:') !!}
    {!! Form::text('lamina1', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lamina2', 'Lamina 2:') !!}
    {!! Form::text('lamina2', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('laminas.index') !!}" class="btn btn-default">Cancelar</a>
</div>