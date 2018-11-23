<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style type="text/css">

</style>
</head>
<body>
    <div class="box">
        <div class="component">
            <span>
                <ul>
                    <?php 
                        $con = new mysqli("localhost", "root", "", "sistema");
                        $consulta   = mysqli_query($con, "SELECT * FROM vendasdia");
                        $obj = mysqli_fetch_object($consulta);
                            $obj->id;
                    ?>
                </ul>
            </span>
        </div>
    </div>
</body>
</html>