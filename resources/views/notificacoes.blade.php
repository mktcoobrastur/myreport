@extends('layouts.app')

@section('content')

<section class="content-header">
      <h1>
        Notificações
        <small>coobrastur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Notificações</a></li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="box">
    <div class="alert">
<?php
    $con = new mysqli("localhost", "root", "", "sistema");
    $consulta = mysqli_query($con, "SELECT * FROM notificacoes ORDER BY id ASC");
    while ($l = mysqli_fetch_array($consulta)) {
?>
      <li class=""><i class="opaque"><?php echo $l['tabela']; ?></i></li>
<?php } ?>

    </div>
</div>
</section>
    <!-- /.content -->

@endsection