@extends('layouts.app')

@section('content')

<section class="content-header">
      <h1>
        Notificações
        <small>coobrastur</small>
      </h1>
      <ol class="breadcrumb">
<<<<<<< HEAD
        <li><a href="/"><i class="fa fa-dashboard"></i> Notificações</a></li>
=======
        <li><a href="/"><i class="fa fa-dashboard"></i> <?php echo strtoupper(Request::segment(1)); ?></a></li>
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
      </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="box">
    <div class="alert">
<?php
    $con = new mysqli("localhost", "root", "", "sistema");
<<<<<<< HEAD
    $consulta = mysqli_query($con, "SELECT * FROM notificacoes ORDER BY id ASC");
=======
    $consulta = mysqli_query($con, "SELECT * FROM notificacoes ORDER BY id DESC");
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
    while ($l = mysqli_fetch_array($consulta)) {
?>
      <li class=""><i class="opaque"><?php echo $l['tabela']; ?></i></li>
<?php } ?>

    </div>
</div>
</section>
    <!-- /.content -->

@endsection