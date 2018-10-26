<style type="text/css">
    .tHover:hover {
        background: #f0f0f0;
    }
</style>
<form action="<?php $_PHPSELF; ?>" method="get" class="sidebar-form">
            <div class="input-group">
            <?php if(isset($_GET['q'])) { ?>
                <input type="text" name="q" class="form-control" placeholder="Pesquisa rápida..."/>
            <?php } else { ?>
                <input type="text" name="q"  class="form-control" placeholder="Pesquisa rápida..." />
            <?php } ?>

                <span class="input-group-btn">
            <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
</form>
<?php
    if (isset($_GET['q'])){
?>
<div class="alert" style="background: #f9f9f9;">
<table class="table table-bordered" id="promocoes-table">
    <thead>
        <tr>
            <th>Hotel</th>
            <th>Codigo</th>
            <th>Galeria</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $campo = $_GET['q'];
            $conexao  = mysqli_connect("localhost","root","","sistema");
            $query    = "SELECT * from fotos WHERE hotel LIKE '%".$campo."%' OR codigo LIKE '%".$campo."%'";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
        <tr class="tHover">
            <td><?php echo utf8_encode($linha['hotel']); ?></td>
            <td><?php echo $linha['codigo']; ?></td>
            <td>&nbsp;</td>
            <td>
                
                <div class='btn-group'>
                    <a href="fotos/<?php echo $linha['id']; ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="fotos/<?php echo $linha['id']; ?>/edit" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                
            </td>
        </tr>
            
        <?php
            } 
        }
        ?>

    </tbody>
</table>
    </div>
<!--################## FIM BUSCA ################-->
