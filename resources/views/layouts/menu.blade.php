<br />
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Marketing
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Tarefas</a></li>
          <li><a href="#">Emarks</a></li>
          <li><a href="#">Outros</a></li>
        </ul>
</li>
<li>
    <a href="#">Relacionamento</a>
</li>

<li>
    <a href="#">Negócios</a>
</li>

<li>
    <a href="#">Novos Produtos</a>
</li>

<li>
    <a href="#">Triton</a>
</li>

<li>
    <a href="#">Telemarketing</a>
</li><li class="{{ Request::is('tarefas*') ? 'active' : '' }}">
    <a href="{!! route('tarefas.index') !!}"><i class="fa fa-edit"></i><span>Tarefas</span></a>
</li>

<li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
    <a href="{!! route('departamentos.index') !!}"><i class="fa fa-edit"></i><span>Departamentos</span></a>
</li>

<li class="{{ Request::is('tritons*') ? 'active' : '' }}">
    <a href="{!! route('tritons.index') !!}"><i class="fa fa-edit"></i><span>Tritons</span></a>
</li>

<li class="{{ Request::is('negocios*') ? 'active' : '' }}">
    <a href="{!! route('negocios.index') !!}"><i class="fa fa-edit"></i><span>Negocios</span></a>
</li>

<li class="{{ Request::is('relacionamentos*') ? 'active' : '' }}">
    <a href="{!! route('relacionamentos.index') !!}"><i class="fa fa-edit"></i><span>Relacionamentos</span></a>
</li>

