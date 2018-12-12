<form action="<?php $_PHPSELF; ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Pesquisa rápida..."/>
          <span class="input-group-btn">
            <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
</form>
<?php
    if (isset($_GET['q'])){
?>
<table class="table table-responsive" id="promocoes-table">
    <thead>
        <tr>
        <th>Hotel</th>
        <th>Resumo</th>
        <th>Codigo</th>
        <th>Estado</th>
        <th>Plano</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $campo = $_GET['q'];
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $query    = "SELECT * from promocoes WHERE hotel LIKE '%".$campo."%' OR codigo LIKE '%".$campo."%'";
            $query    = mysqli_query($conexao, $query);
            
    	    while ($linha = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo utf8_encode($linha['hotel']); ?></td>
            <td><?php echo utf8_encode($linha['resumo']); ?></td>
            <td><?php echo $linha['codigo']; ?></td>
            <td><?php echo $linha['estado']; ?></td>
            <td style="font-size: 11px; text-align: center; font-weight: bold;">
                <?php if ($linha['plano'] == '1') { echo "DIAMANTE"; } ?>
                <?php if ($linha['plano'] == '2') { echo "GOLD"; } ?>
                <?php if ($linha['plano'] == '3') { echo "CONVENCIONAL"; } ?>
            </td>
            <td>
                
                <div class='btn-group'>
                    <a href="promocoes/<?php echo $linha['id']; ?>" style="color: #555;" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="promocoes/<?php echo $linha['id']; ?>/edit" style="color: #555;" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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

<div class="alert">
<table class="table table-responsive" id="promocoes-table" <?php if(isset($_GET['q'])) { echo "style='display: none;'"; } ?>>
    <thead>
        <tr>
        <th>Hotel</th>
        <th>Codigo</th>
        <th>Estado</th>
        <th>Plano</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
  
    @foreach($promocoes as $promocoe)
        <tr>
            <td>{!! $promocoe->hotel !!}</td>
            <td>{!! $promocoe->codigo !!}</td>
            <td>{!! $promocoe->estado !!}</td>
            <td style="font-size: 11px; text-align: center; font-weight: bold;">
                <?php if ($promocoe->plano == '1') { echo "DIAMANTE"; } ?>
                <?php if ($promocoe->plano == '2') { echo "GOLD"; } ?>
                <?php if ($promocoe->plano == '3') { echo "CONVENCIONAL"; } ?>
            </td>
            <td>
                {!! Form::open(['route' => ['promocoes.destroy', $promocoe->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('promocoes.show', [$promocoe->id]) !!}" style="color: #555;" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('promocoes.edit', [$promocoe->id]) !!}" style="color: #555;" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>