@extends('layouts.app')

@section('content')

<style type="text/css">
    .Mtitulo {
        color: #498FCB;
        font-family: 'Open Sans', sans-serif;
        font-size: 17px;
    }
    .linkM {
        display: block;
        padding-left: 25px;
    }
    .tabelaM {
        background: ;
        width: 200px;
        margin: 20px;
        float: left;
    }
    .align {
        margin: 20px;
    }
    i:hover {
        opacity: 0.9;
    }
</style>
    <div class="content">
        <div class="box">

    <div class="box-body">

<div class="align">
<ul class="timeline">
<!-- timeline time label -->
<li class="time-label">
    <span class="bg-green btn-lg">
        Convênios
    </span>
</li>
<!-- /.timeline-label -->       
<?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");

            //query1
            $query    = "SELECT * FROM markconvenios where tipo = 'C'";
            $query    = mysqli_query($conexao, $query);
            
            //query2

            while ($linha = mysqli_fetch_array($query)) {
                $idMark        = $linha['id'];
                $query2    = "SELECT * FROM markconveniados where convenio = $idMark";
                $query2    = mysqli_query($conexao, $query2);
            ?>

<!-- timeline item -->
<li>
    <!-- timeline icon -->
    <i class="fa fa-user-o bg-blue"></i>
    <div class="timeline-item" style="background: #f0f0f0; box-shadow: 3px 3px 8px #ccc;">
        <h3 class="timeline-header"><a href="/markconvenios/<?php echo $linha['id']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo strtoupper($linha['nome']); ?></a>
        <a href="http://webdesigner2/sistema/public/markconveniados/create?r=<?php echo $linha['id']; ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </h3>
        <div class="timeline-body">
        <div class="timeline-footer">
            <?php while ($linha2 = mysqli_fetch_array($query2)) { ?>
                <a class="btn btn-primary btn-xs" href="http://webdesigner2/sistema/public/markconveniados/<?php echo $linha2['id']; ?>"><?php echo strtoupper($linha2['nome']); ?></a>
            <?php } ?>                
        </div>
        </div>

    </div>
</li>
<!-- END timeline item -->

	    <?php } ?>
              
 <!-- timeline time label -->
<li class="time-label">
    <span class="bg-red btn-lg">
        Promoções
    </span>
</li>
<!-- /.timeline-label -->

<?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");

            //query1
            $query    = "SELECT * FROM markconvenios where tipo = 'P'";
            $query    = mysqli_query($conexao, $query);
            
            //query2
            while ($linha = mysqli_fetch_array($query)) {
                $idMark        = $linha['id'];
                $query2    = "SELECT * FROM markconveniados where convenio = $idMark";
                $query2    = mysqli_query($conexao, $query2);
            ?>

<!-- timeline item -->
<li>
    <!-- timeline icon -->
    <i class="fa fa-user-o bg-red"></i>
    <div class="timeline-item" style="background: #f0f0f0;">
        <h3 class="timeline-header"><a href="http://webdesigner2/sistema/public/markconvenios/<?php echo $linha['id']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo utf8_encode(strtoupper($linha['nome'])); ?></a>
        <a href="http://webdesigner2/sistema/public/markconveniados/create?r=<?php echo $linha['id']; ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </h3>

        <div class="timeline-body">
        <div class="timeline-footer">
            <?php while ($linha2 = mysqli_fetch_array($query2)) { ?>
                <a class="btn btn-danger btn-xs" href="http://webdesigner2/sistema/public/markconveniados/<?php echo $linha2['id']; ?>"><?php echo strtoupper(utf8_encode($linha2['nome'])); ?></a>
            <?php } ?>                
        </div>
        </div>

    </div>
</li>
<!-- END timeline item -->

	    <?php } ?>


       </div>


</ul>
</div>          
            <br />
        </div>
    </div>

@endsection