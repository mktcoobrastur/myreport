<br />
<!--li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Marketing
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Tarefas</a></li>
          <li><a href="#">Emarks</a></li>
          <li><a href="#">Outros</a></li>
        </ul>
</li-->
<li>
    <a href="/home"><i class="fa fa-dashboard"></i> <span> Painel Principal</span></a>
</li>

<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Marketing</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('marketings.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="/mark"><i class="fa fa-circle-o text-aqua"></i> Emarks</a></li>
          </ul>
</li>

<li class="treeview">
          <a href="#">
          <i class="fa fa-book"></i>
            <span>Relacionamento</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('relacionamentos.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="{!! route('chamados.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Gerenciamento de Chamados</a></li>
            <li><a href="/indice"><i class="fa fa-circle-o text-aqua"></i> Índice ( Chamados )</a></li>
            <!--li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Fale Conosco</a></li-->
          </ul>
</li>

<li class="treeview">
          <a href="#">
          <i class="fa fa-pie-chart"></i>
            <span>Negócios</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('negocios.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="{!! route('vendasdias.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Vendas</a></li>
            <li><a href="{!! route('convenios.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Convênios</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Indicação Premiada</a></li>
          </ul>
</li>

<li class="treeview">
          <a href="#">
          <i class="fa fa-h-square"></i> 
            <span>Hotéis</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('hoteis.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
            <li><a href="{!! route('promocoes.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Promoções</a></li>
            <li><a href="{!! route('fotos.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Fotos Site</a></li>
          </ul>
</li>

<li class="treeview">
          <a href="#">
          <i class="fa fa-laptop"></i>
            <span>Gestão Triton</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">1</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('tritons.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
          </ul>
</li>

<li class="treeview">
          <a href="#">
          <i class="fa fa-envelope"></i>
            <span>Televenda</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">1</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('telemarketings.index') !!}"><i class="fa fa-circle-o text-aqua"></i> Tarefas</a></li>
          </ul>
</li>

<li class="{{ Request::is('projetos*') ? 'active' : '' }}">
    <a href="{!! route('projetos.index') !!}"><i class="fa fa-edit"></i> <span>Projetos</span></a>
</li>

<!--li class="{{ Request::is('tarefas*') ? 'active' : '' }}">
    <a href="{!! route('tarefas.index') !!}"><i class="fa fa-edit"></i><span>Tarefas</span></a>
</li>

<li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
    <a href="{!! route('departamentos.index') !!}"><i class="fa fa-edit"></i><span>Departamentos</span></a>
</li-->


<?php if(Auth::user()->email == 'designer@coobrastur.com.br') { ?>


<li class="treeview">
          <a href="#">
          <i class="fa fa-laptop"></i>
            <span>Menu Programador</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">11</span>
            </span>
          </a>

  <ul class="treeview-menu">

    <li class="{{ Request::is('metas*') ? 'active' : '' }}">
        <a href="{!! route('metas.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Metas</span></a>
    </li>

    <li class="{{ Request::is('atendentes*') ? 'active' : '' }}">
        <a href="{!! route('atendentes.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Atendentes</span></a>
    </li>

    <li class="{{ Request::is('representantes*') ? 'active' : '' }}">
        <a href="{!! route('representantes.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Representantes</span></a>
    </li>

    <li class="{{ Request::is('vendasres*') ? 'active' : '' }}">
        <a href="{!! route('vendasres.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Vendas Representantes</span></a>
    </li>

    <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
        <a href="{!! route('usuarios.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Usuarios</span></a>
    </li>

    <li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
        <a href="{!! route('departamentos.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Departamentos</span></a>
    </li>

    <li class="{{ Request::is('recados*') ? 'active' : '' }}">
        <a href="{!! route('recados.index') !!}"><i class="fa fa-circle-o text-aqua"></i> <span>Recados</span></a>
    </li>

    <li class="">
        <a href="javascript:newPopup()"><i class="fa fa-circle-o text-aqua"></i> <span>Acesso Televenda</span></a>
    </li>
</ul>
<script language=javascript type="text/javascript">
function newPopup(){
varWindow = window.open ('http://localhost/televenda/users/', 'popup', "width=500, height=300, right=100, bottom=100, scrollbars=no ")
}
</script>
</li>
<?php } ?>