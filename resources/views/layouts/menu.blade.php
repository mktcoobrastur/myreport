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

<li class="{{ Request::is('marketings*') ? 'active' : '' }}">
    <a href="{!! route('marketings.index') !!}"><i class="fa fa-edit"></i> <span>Marketing</span></a>
</li>

<li class="{{ Request::is('relacionamentos*') ? 'active' : '' }}">
    <a href="{!! route('relacionamentos.index') !!}"><i class="fa fa-edit"></i> <span>Relacionamento</span></a>
</li>

<li class="{{ Request::is('negocios*') ? 'active' : '' }}">
    <a href="{!! route('negocios.index') !!}"><i class="fa fa-edit"></i> <span>Negócios</span></a>
</li>

<li class="{{ Request::is('tritons*') ? 'active' : '' }}">
    <a href="{!! route('tritons.index') !!}"><i class="fa fa-edit"></i> <span>Gestão Triton</span></a>
</li>

<li class="{{ Request::is('telemarketings*') ? 'active' : '' }}">
    <a href="{!! route('telemarketings.index') !!}"><i class="fa fa-edit"></i> <span>Telemarketing</span></a>
</li>

<!--li class="{{ Request::is('tarefas*') ? 'active' : '' }}">
    <a href="{!! route('tarefas.index') !!}"><i class="fa fa-edit"></i><span>Tarefas</span></a>
</li>

<li class="{{ Request::is('departamentos*') ? 'active' : '' }}">
    <a href="{!! route('departamentos.index') !!}"><i class="fa fa-edit"></i><span>Departamentos</span></a>
</li-->