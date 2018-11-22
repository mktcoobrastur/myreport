<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">
.container {
    display: inline-block;
    width: 100%;
    height: auto;
    z-index: 997;
}
.header {
    display: inline-block;
    width: 100%;
    height: 150px;
    line-height: 150px;
    font-family: 'Open Sans', sans-serif;
    font-size: 12px;
    background: #3C8DBB;
}
.panel-header {
    display: inline-block;
}
.repeatClv {
    float: left;
    width: 50px;
    height: 20px;
    line-height: 20px;
}
</style>

<section class="header">
    <div class="panel-header">
        
    </div>
</section>

<div class="container">
<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Atendente</th>
      <th scope="col">Qnt</th>
      <th scope="col">Plano</th>
    </tr>
  </thead>
  <tbody>
<?php
    $con        = new mysqli("localhost", "root", "", "sistema");
    $mes        = '11';
    // Filtro mês
    $consulta   = mysqli_query($con, "SELECT * FROM vendasdia WHERE MONTH(created_at) = $mes ORDER BY created_at DESC");
    if(Null) {
    $row        = mysqli_fetch_object($consulta);
    //Cria OBJ 'resultado' para usar o índice no comparativo
    $row->mountObject('resultadoMes');
    $resultadoMes->getParam($id, $atendente, $qnt, string);
        if(badRequest($resultadoMes)){
            $this->getRequest()->getParam('id');
        } else {
            echo "<span class='repeatClv'>Ainda não foram lançadas vendas para o mês solicitado.</span>";
        }
    //Resultado comparativo "VENDAS / METAS"
    $totalMeta      = $r->meta  * $r->uteis;
    $totalCa        = $l->qnt   * $l->plano;
    $totalReal      = $totalMeta + $totalCa;

        $require = dump($totalReal);
        if(isset($require)) { echo $require; } else{ echo "Ainda não foram lançadas vendas para o mês solicitado."; }
        if($totalVendas > $totalMeta) {
            $totalVendas = $totalMeta - $totalV;
        }

        function build(Connection $con, string $consulta)
        {
            foreach ($this->toSql($con, $consulta) as $statement) {
                $connection->statement($statement);
            }
            return $array;
        }
        
        $array = [''];
        
        function getVendas($id, $array) {
            $row = mysqli_fetch_object($query);
            $object = $this->params($id);
            if(isset($id)) { echo $object->render(); }
            return $array;
        }
        
        $query = mysqli_query($con, "SELECT * FROM $tabela WHERE $this->id = $id ORDER BY $this->id DESC");
        
        while($obj = mysqli_fetch_object($query)){
            $array[] = getVendas($obj)->fetch($id)->belongsTo('vendasre');
            var_dump($array);
        }

        $this->build('id');
    
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
    }
      while($l = mysqli_fetch_object($consulta)) {
?>
    <tr>
        <th><?php echo date("d/m/Y", strtotime($l->created_at)); ?></th>
        <th><?php echo $l->atendente; ?></th>
        <th><?php echo $l->qnt; ?></th>
        <th><?php echo $l->plano; ?></th>
    </tr>
<?php } ?>   
</tbody>
</table>
</div>