@extends('layouts.app')

@section('content')
<style type="text/css">

</style>

<section class="content-header">
      <h1>
        Televenda
        <small>coobrastur</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> <?php echo strtoupper(Request::segment(1)); ?></a></li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="box">
    <div class="alert">
    </div>
</div>
</section>
    <!-- /.content -->

@endsection