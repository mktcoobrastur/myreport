<style type="text/css">
.active {
  display: block;
}
</style>
<br />
<?php
  $pag  = Request::segment(1);
  if ($pag == 'marketings')     { $amarketing = "active"; }
  if ($pag == 'mark')           { $amarketing = "active"; }
  if ($pag == 'laminas')        { $amarketing = "active"; }

  if ($pag == 'chamados')       { $arelacionamento = "active"; }
  if ($pag == 'indice')         { $arelacionamento = "active"; }
  if ($pag == 'reclameaqui')    { $arelacionamento = "active"; }

  if ($pag == 'convenios')      { $anegocios = "active"; }
  if ($pag == 'metas')          { $anegocios = "active"; }
  if ($pag == 'representantes') { $anegocios = "active"; }
  if ($pag == 'negocios')       { $anegocios = "active"; }
  if ($pag == 'vendasdias')     { $anegocios = "active"; }

  if ($pag == 'hoteis')         { $ahoteis = "active"; }
  if ($pag == 'promocoes')      { $ahoteis = "active"; }
  if ($pag == 'fotos')          { $ahoteis = "active"; }
  if ($pag == 'laminas')        { $ahoteis = "active"; }

  if ($pag == 'tritons')        { $atriton = "active"; }

  if ($pag == 'telemarketings') { $atelevenda = "active"; }
  if ($pag == 'atendentes')     { $atelevenda = "active"; }
  if ($pag == 'ranking')        { $atelevenda = "active"; }

?>

<li>
    <a href="http://webdesigner2/sistema/public/home"><i class="fa fa-dashboard"></i> <span> Painel Principal</span></a>
</li>
<?php 
  $idUser         = Auth::user()->id; 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  1");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>
<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Marketing</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu <?php if(isset($amarketing)) { echo $amarketing; } ?>">
            <li><a href="{!! route('marketings.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="http://webdesigner2/sistema/public/mark"><i class="fa fa-circle-o text-aqua"></i> Emarks</a></li>
            <li><a href="{!! route('laminas.index') !!}"><i class="fa fa-circle-o text-aqua"></i>Solicitação de Lâminas</a></li>
          </ul>
</li>
<?php } ?>
<?php 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  2");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>

<li class="treeview">
          <a href="#">
          <i class="fa fa-book"></i>
            <span>Relacionamento</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu <?php if(isset($arelacionamento)) { echo $arelacionamento; } ?>">
            <!--li><a href="{!! route('relacionamentos.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li-->
            <li><a href="{!! route('chamados.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Gerenciamento de Chamados</a></li>
            <li><a href="http://webdesigner2/sistema/public/indice"><i class="fa fa-circle-o text-aqua"></i> Índice ( Chamados )</a></li>
            <li><a href="http://webdesigner2/sistema/public/reclameaqui?t=6"><i class="fa fa-circle-o text-aqua"></i> Índice ReclameAqui 6 meses</a></li>
            <li><a href="http://webdesigner2/sistema/public/reclameaqui?t=12"><i class="fa fa-circle-o text-aqua"></i> Índice ReclameAqui 12 meses</a></li>
          </ul>
</li>

<?php } ?>
<?php 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  3");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>

<li class="treeview">
          <a href="#">
          <i class="fa fa-pie-chart"></i>
            <span>Negócios</span>
            <span class="pull-right-container">
            </span>
          </a>
    <ul class="treeview-menu <?php if(isset($anegocios)) { echo $anegocios; } ?>">
      <li><a href="{!! route('convenios.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Convênios</a></li>
      <li><a href="{!! route('metas.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Metas</span></a></li>
      <li><a href="{!! route('representantes.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Representantes</span></a></li>
      <li><a href="{!! route('negocios.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
      <li><a href="{!! route('vendasdias.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Vendas</a></li>
    </ul>
</li>
<?php } ?>
<?php 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  4");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>
<li class="treeview">
          <a href="#">
          <i class="fa fa-h-square"></i> 
            <span>Hotéis</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu <?php if(isset($ahoteis)) { echo $ahoteis; } ?>">
            <li><a href="{!! route('hoteis.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="{!! route('promocoes.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Promoções</a></li>
            <li><a href="{!! route('fotos.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Fotos Site</a></li>
            <li><a href="{!! route('laminas.index') !!}"><i class="fa fa-circle-o text-aqua"></i>Solicitação de Lâminas</a></li>
          </ul>
</li>
<?php } ?>
<?php 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  5");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>
<li class="treeview">
          <a href="#">
          <i class="fa fa-laptop"></i>
            <span>Gestão Triton</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu <?php if(isset($atriton)) { echo $atriton; } ?>">
            <li><a href="{!! route('tritons.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
          </ul>
</li>
<?php } ?>
<?php 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  6");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>
<li class="treeview">
          <a href="#">
          <i class="fa fa-envelope"></i>
            <span>Televenda</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu <?php if(isset($atelevenda)) { echo $atelevenda; } ?>">
            <li><a href="{!! route('telemarketings.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="{!! route('atendentes.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Atendentes</span></a></li>
            <li><a href="javascript:newPopup()"><i class="fa fa-circle-o text-aqua"></i><span> Lançar Vendas</span></a></li>
            <li><a href="http://webdesigner2/sistema/public/ranking"><i class="fa fa-circle-o text-aqua"></i> Ranking</a></li>
          </ul>
</li>
<script language=javascript type="text/javascript">
  function newPopup(){
    varWindow = window.open ('http://webdesigner2/televenda/users/', 'popup', "width=500, height=300, right=100, bottom=100, scrollbars=no ")
  }
</script><?php } ?>
<?php 
  $consultaAcesso = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $idUser AND acesso =  7");
  $a              = mysqli_fetch_array($consultaAcesso);
  if($a != Null) {
?>
<li><a href="{!! route('projetos.index') !!}"><i class="fa fa-edit"></i> <span>Projetos</span></a></li>
<?php } ?>

    <li><a href="{!! route('usuarios.index') !!}"><i class="fa fa-user-o"></i> <span>Usuarios</span></a></li>

<?php if(Auth::user()->email == 'designer@coobrastur.com.br') { ?>

<li class="treeview">
          <a href="#">
          <i class="fa fa-laptop"></i>
            <span>Menu Programador</span>
            <span class="pull-right-container">
            </span>
          </a>

  <ul class="treeview-menu">
    <li><a href="{!! route('usuarios.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Usuarios</span></a></li>
    <li><a href="{!! route('departamentos.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Departamentos</span></a></li>
    <li><a href="{!! route('recados.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Recados</span></a></li>
    <li><a href="javascript:newPopup()"><i class="fa fa-circle-o text-aqua"></i> <span>Acesso Televenda</span></a></li>
    <li><a href="{!! route('laminas.index') !!}"><i class="fa fa-circle-o text-aqua"></i><span>Solicitação de Lâminas</span></a></li>
  </ul>

</li>
<?php } ?>

