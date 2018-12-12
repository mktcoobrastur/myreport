<!-- Data Field -->
<?php 
    if(Request::segment(3)) {

    } else {

?>
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Data:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>
<?php
    }
?>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atendente', 'Quem está tratando:') !!}
    <select name="atendente" class="form-control">
        <?php
        $userName   = Auth::user()->name;
        $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
        $sql    = "SELECT * FROM users where depto = 'Relacionamento' order by id desc";
        $query    = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($query)) {
        ?>
        <option value="<?php echo $linha['name']; ?>"><?php echo $linha['name']; ?></option>
        <?php
        }
        ?>
    </select>
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
    {!! Form::select('motivo', array('Elogios' => 'Elogios  ',
                                           'Informacoes' => 'Informações',
                                           'Reclamacoes' => 'Reclamações',
                                           'Servicos' => 'Serviços ou Solicitações',
                                           'Sugestoes' => 'Sugestões',
                                           'Outros' => 'Outros'
                                           ), '', ['class' => 'form-control']) !!}
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tecnico', 'Categoria:') !!}
    {!! Form::select('tecnico', array('Cancelamento' => 'Cancelamento',
                                           'Central' => 'Central de Atendimento',
                                           'Cobranca' => 'Cobrança',
                                           'e-tickets' => 'e-Tickets',
                                           'Hotel' => 'Hotel',
                                           'Relacionamento' => 'Relacionamento',
                                           'Reservas' => 'Reservas',
                                           'Vendas' => 'Vendas',
                                           'Outros' => 'Outros'
                                           ), '', ['class' => 'form-control']) !!}
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
    {!! Form::select('status', array('aberto' => 'ABERTO  ',
                                     'andamento' => 'EM ANDAMENTO',
                                     'encerrado' => 'ENCERRADO',
                                     'pausa' => 'EM PAUSA'
                                     ), 'E', ['class' => 'form-control']) !!}
</div>


<div style="clear: both;"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('chamados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
