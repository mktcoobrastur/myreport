<style type="text/css">
    .boxStatus {
        float: left;
        background: #f0f0f0;
        border-radius: 5px;
        margin: 10px;
        padding: 10px;
        width: 250px;
        height: 50px;
        line-height: 25px;
        border-top: 4px solid #3C8CBB;
        border-left: 1px solid #CCC;
        border-bottom: 1px solid #CCC;
        border-right: 1px solid #CCC;
    }
</style>
<!-- Id Field -->
<div class="boxStatus">
    {!! Form::label('id', 'Id:') !!}
    {!! $usuario->id !!}
</div>

<!-- Name Field -->
<div class="boxStatus">
    {!! Form::label('name', 'Name:') !!}
    {!! $usuario->name !!}
</div>

<!-- Name Field -->
<div class="boxStatus">
    {!! Form::label('depto', 'Departamento:') !!}
    {!! $usuario->depto !!}
</div>
<div style="clear: both;"></div>
<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $usuario->email !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $usuario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Última Atualização:') !!}
    <p>{!! $usuario->updated_at !!}</p>
</div>

<!-- Check List -->
<div class="form-group">
    {!! Form::label('permissao', 'Permissões:') !!}
    <table style="margin: 20px;">
                <?php
                    $con = new mysqli("localhost", "root", "", "sistema");
                    $consulta = mysqli_query($con, "SELECT * FROM departamentos");
                    while($linha = mysqli_fetch_array($consulta)) {
                        ?>
    <tr>
            <th><input name="genero[]" type="checkbox" value="1" /> <br></th>
            <th> <?php echo utf8_encode($linha['depto']); ?></th>
        </tr>
                        
                        <?php
                    }
                    ?>
    <tr>
            
            <th colspan="2"><input type="submit" name="atualizarP" value="Atualizar Permissões" class="btn btn-primary btn-sm" /></th>
        </tr>
    </table>
</div>
