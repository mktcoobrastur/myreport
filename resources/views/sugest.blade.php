@extends('layouts.app')

@section('content')
<div class="alert">
    <div class="content-header">
    <h1>Sugestões</h1>
    </div><br />
    <div class="box">
<table class="table table-responsive" id="usuarios-table">
    <thead>
        <tr>
        <th>Usuário</th>
        <th>Local</th>
        <th>Sugestão</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $con = new mysqli("localhost", "root", "", "sistema");
        $query  = mysqli_query($con, "SELECT * FROM sugestoes");
        while($linha = mysqli_fetch_array($query)) {
        
        ?>

        <tr>
            <td><?php echo $linha['nome']; ?></td>
            <td><?php echo $linha['depto']; ?></td>
            <td><?php echo utf8_encode($linha['sugestao']); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</div>
@endsection