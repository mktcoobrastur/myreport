@extends('layouts.app')

@section('content')
<div class="alert">
    <div class="content-header">
    <h1>Conversor TXT to XML</h1>
    </div><br />
    <div class="box" style="padding: 10px;">
        <form action="http://webdesigner2/sistema/public/converter.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Selecione o arquivo a ser convertido.</label>
            <input type="file" name="arquivos[]" class="form-control"  multiple>
        </div>
        <div class="form-group">
            <label>Selecione a rede.</label>
            <select name="rede" class="form-control">
                <option value="Convencional">Convencional</option>
                <option value="Diamante">Diamante</option>
                <option value="Gold">Gold</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="converter" value="Converter" class="form-control btn btn-primary">
        </div>
        </form>
    </div>
</div>

<?php
    if (isset($_GET['arq'])) {
        $arq = $_GET['arq'];
        echo "<center>Clique no arquivo para fazer o download.<br /><br /><a class='btn btn-primary' href='http://webdesigner2/sistema/public/$arq' download>".$_GET['arq']."</a></center>";
    }
?>
@endsection