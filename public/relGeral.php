<html>
<head>
    <title>Relatório Geral</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <div class="infoBlocoI" style="float: left; width: 45%; margin-left: 2%; background: #fff; box-shadow: 2px 2px 15px #ccc;">

<div class="box-header" style="text-align: center;">
    <h5 class="box-title">Visão geral</h5>
</div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tr>
              <th style="width: 10px">#</th>
              <th>Nome</th>
              <th>Progresso</th>
              <th style="width: 40px">Total</th>
            </tr>

<?php
    //Consulta DIAMANTE
    $con = new mysqli("localhost", "root", "", "sistema");
    $consultaT = mysqli_query($con, "SELECT * FROM vendasdia");
    $total = mysqli_num_rows($consultaT);
?>
                        
            <tr>
              <td>#</td>
              <td align="left">Televenda</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-primary progress-bar-striped" style="width:37%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td><span class="badge bg-default" style="background: #f0f0f0; color: #000;"><?php echo $total; ?></span></td>
            </tr>


        </table>
        </div>
        <!-- /.box-body -->
</div>

</body>
</html>