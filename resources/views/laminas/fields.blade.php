

<script type="text/javascript">
 	$(document).ready(function(){
		$("#txtNome").autocomplete("http://webdesigner2/sistema/public/completar.php", {
			width:400,
			selectFirst: false
		});
	});
 </script>

<!-- Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel', 'Hotel:') !!}<br />
    <i class="opaque">Pesquise pelo código ou pelo nome do hotel.</i>
    {!! Form::text('hotel', null, ['class' => 'form-control', 'id' => 'txtNome']) !!}
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