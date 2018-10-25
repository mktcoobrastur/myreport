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
        background: #f5f5f5;
        width: 400px;
        float: left;
        margin: 20px;
    }
</style>
    <section class="content-header">
        <h1>
            Marketing
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

    <div class="box-body">

        <?php
            $conexao  = mysqli_connect("localhost","root","","sistema");

            //query1
            $query    = "SELECT * FROM markconvenios";
            $query    = mysqli_query($conexao, $query);
            
            //query2

            while ($linha = mysqli_fetch_array($query)) {
                $idMark        = $linha['id'];
                $query2    = "SELECT * FROM markconveniados where convenio = $idMark";
                $query2    = mysqli_query($conexao, $query2);
            ?>
                <div class="tabelaM">
                    <b class="Mtitulo"><?php echo strtoupper($linha['nome']); ?></b><br />
                    <?php while ($linha2 = mysqli_fetch_array($query2)) { ?>
                        <a class='linkM' href=""><?php echo strtoupper($linha2['nome']); ?></a>
                    <?php } ?>                
                </div>
	    <?php } ?>                
        </div>

        </div>
    </div>

@endsection