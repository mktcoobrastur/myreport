@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        <?php echo Auth::user()->name; ?>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'patch']) !!}

                        @include('usuarios.fields')

                   {!! Form::close() !!}
 
 
               </div>
 
 <!-- Check List -->
<div class="form-group alert">
    {!! Form::label('permissao', 'Permissões:') !!} 
        <a href="<?php echo $_ENV['APP_URL']; ?>fullPermissao.php?idUser={!! $usuario->id !!}" class="btn btn-danger btn-sm">Permissão Total</a>


                <?php
                    $id_user = $usuario->id;
                    $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                    $consulta = mysqli_query($con, "SELECT * FROM permissoes WHERE user = $id_user");
                    while($linha = mysqli_fetch_array($consulta)) {
                ?>
                    <span class="badge badge-primary" style="font-weight: 100; font-size: 13px;">
                    <?php
                    $acesso = $linha['acesso'];
                    $consultaF = mysqli_query($con, "SELECT * FROM departamentos WHERE id = $acesso");
                    while($linhaF = mysqli_fetch_array($consultaF)) {
                        echo "&nbsp;&nbsp;".utf8_encode($linhaF['depto'])."&nbsp;&nbsp;";
                    }
                ?>
                     <a href="<?php echo $_ENV['APP_URL']; ?>excluiPermissao.php?id=<?php echo $linha['id']; ?>&item={!! $usuario->id !!}" onclick="return confirm('Tem certeza que deseja excluir esta permissão para este usuário?')" class="btn btn-danger btn-sm botaoe" alt="Excluir" data-toggle="tooltip" data-placement="top" title="Excluir" style="text-decoration: none;">x</a>
                    </span>
                <?php
                    }
                ?>



            <form action="<?php echo $_ENV['APP_URL']; ?>permissao.php" method="post">
            <input type="hidden" name="idUser" value="{!! $usuario->id !!}">
            <select name="acesso" class="form-control" style="width: 180px;">
                <?php
                    $con = new mysqli("mysql05-farm61.uni5.net", "marketingcoobr03", "i8h9p5z2", "marketingcoobr03");
                    $consulta = mysqli_query($con, "SELECT * FROM departamentos ORDER BY depto ASC");
                    while($linha = mysqli_fetch_array($consulta)) {
                ?>
                    <option value="<?php echo $linha['id']; ?>"><?php echo utf8_encode($linha['depto']); ?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" name="atualizarP" value="Adicionar" class="btn btn-primary btn-sm" />
            </form>
</div>

           </div>
       </div>
   </div>

   
@endsection