<table class="table table-responsive" id="metas-table">
    <thead>
        <tr>
            <th>Mês</th>
            <th>Representante</th>
        <th>Dias Úteis</th>
        <th>Meta</th>
            <th colspan="3" style="text-align: right;">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($metas as $meta)
        <tr>
            <td>
                <?php 
                    if($meta->mes == 1) { echo "Janeiro"; }
                    if($meta->mes == 2) { echo "Fevereiro"; } 
                    if($meta->mes == 3) { echo "Março"; } 
                    if($meta->mes == 4) { echo "Abril"; } 
                    if($meta->mes == 5) { echo "Maio"; } 
                    if($meta->mes == 6) { echo "Junho"; } 
                    if($meta->mes == 7) { echo "Julho"; } 
                    if($meta->mes == 8) { echo "Agosto"; } 
                    if($meta->mes == 9) { echo "Setembro"; } 
                    if($meta->mes == 10) { echo "Outubro"; } 
                    if($meta->mes == 11) { echo "Novembro"; } 
                    if($meta->mes == 12) { echo "Dezembro"; } 
                ?>
            </td>
            <td>
                <?php 
                    $nome     =  $meta->representante;
                    $con                = new mysqli("localhost", "root", "", "sistema");
                    $queryN   = mysqli_query($con, "SELECT * FROM representantes WHERE id = $nome");
                    $row      = mysqli_fetch_array($queryN);
                    echo $row['nome'];
                ?>
            </td>
            <td>{!! $meta->uteis !!}</td>
            <td><span class="badge badge-default" style="font-size: 15px; background: #f0f0f0; color: #666;">{!! $meta->meta !!}</span></td>
            <td>
                {!! Form::open(['route' => ['metas.destroy', $meta->id], 'method' => 'delete']) !!}
                <div class='btn-group pull-right'>
                    <a href="{!! route('metas.show', [$meta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('metas.edit', [$meta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>