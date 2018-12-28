<?php require "inc/vars.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coobrastur</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="Description" content="Software de Gestão Coobrastur">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="i.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    @yield('css')
	<link rel="stylesheet" href="css/pace.min.css">
	
    <script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "send.php",
				data: dados,
				success: function( data )
				{   
                    $('#ajax_form').hide();
					alert( data );
				}
			});
			
			return false;
		});
	});
    </script>
    

</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
<!--div style="width: 50px; height: 50px; background: red; position: fixed; right: 0; bottom: 0; z-index: 9999;"></div-->
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
            <img width="120" src="<?php echo $_ENV['APP_URL']; ?>img/myreport.png" />
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <!--a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a-->
                <button type="button" class="btn btn-default btn-lrg ajax hidden" title="Ajax Request"><i class="fa fa-spin fa-refresh"></i></button>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu" style="box-shadow: 2px 2px 20px #333;">
              <li class="header" style="text-align: center;">Caixa de entrada.</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
 
                <!-- start message -->

        <?php
            $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
            $userName   = Auth::user()->name;
            $sql    = "SELECT * FROM recados where para = '$userName' order by id desc limit 0,3";
            $query    = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($query)) {
        ?>
                  <li>
                    <!--  data-toggle="modal" data-target=".bd-example-modal-lgrecados" -->
                    <a href="">
                      <div class="pull-left">
                      <i class="fa fa-comment-o" aria-hidden="true"></i>
                      </div>
                      <h4 style="font-size: 13px;">
                      <?php echo utf8_encode($linha['de']); ?>
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p><?php echo utf8_encode($linha['recado']); ?></p>
                    </a>
                    
            <form action="" method="post" id="ajax_form">
              <div class="input-group">
                        <input type="hidden" name="de" value="{!! utf8_encode($userName) !!}" class="form-control">
                        <input type="hidden" name="para" value="<?php echo utf8_encode($linha['de']); ?>" class="form-control">
                        <input type="text" name="recado" placeholder="Resposta rápida..." class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-flat">Enviar</button>
                        </span>
                </div>
            </form>
</li>
        <?php } ?>
                <!-- end message -->
            </ul>
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="<?php echo $_ENV['APP_URL']; ?>img/logo.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu" style="box-shadow: 2px 2px 50px #999; background: #ffffff;">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?php echo $_ENV['APP_URL']; ?>img/logo.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>({!! Auth::user()->depto !!})</small>
                                        <!--small>Menbro desde {!! Auth::user()->created_at->format('M. Y') !!}</small-->
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat" disabled>Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>

<style type="text/css">
    .ooter {
        display: block;
        float: left;
        width: 100%;
        padding: 10px;
    }
    .indiceC {
        display: block;
        background: #3C8CBB;
        color: #ffffff;
        padding: 10px;
        font-family: 'Open Sans';
    }
    .nomeC {
        display: block;
        margin: 5px;
    }
    .imgC {
        border: 1px solid #999;
        padding: 2px;
    }
</style>
                                           <div class="ooter">
                                    
          <!-- Profile Image -->
          <div class="">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center">Contatos</h3>
                <img src="<?php echo $_ENV['APP_URL']; ?>img/beta.png" width="40" alt="Beta" style="position: absolute; margin-top: -30px; margin-left: 25px;" />
              <p class="text-muted text-center">Clique para conversar.</p>

              <ul class="list-group list-group-unbordered">

<?php
        $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03"); 
        $query    = "SELECT * FROM users";
        $query    = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($query)) {
?>
            <li class="list-group-item" style="height: 38px; background: #F8F8F8;">
            <a id="abrirConversa">  
                <b style="font-size: 11px; cursor:not-allowed;"> <?php echo utf8_encode($linha['name']); ?></b> <a class="pull-right"><i class="fa fa-circle text-success"></i></a>
            </a>
            </li>
            <form action="" method="post" id="ajax_form2" style="display: none; z-index: 999; position: absolute;">
              <div class="input-group">
                        <input type="hidden" name="de" value="{!! utf8_encode($userName) !!}" class="form-control">
                        <input type="hidden" name="para" value="" class="form-control">
                        <input type="text" name="recado" placeholder="Mensagem rápida..." class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-flat">Enviar</button>
                        </span>
                </div>
            </form>
<?php
        }
?>
              </ul>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                                    
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    <!--##############  MODAL RECADOS  ##############-->

    <div class="modal fade bd-example-modal-lgrecados" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title pull-left" id="exampleModalLabel">Recados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


<!-- CONTEUDO MODAL -->
<div class="alert">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <?php
                    $conexao  = mysqli_connect("mysql05-farm61.uni5.net","marketingcoobr03","i8h9p5z2","marketingcoobr03");
                    $userID   = Auth::user()->email;
                    $sql    = "SELECT * FROM recados ";
                    $query    = mysqli_query($conexao, $sql);
                   while ($linha = mysqli_fetch_array($query)) { ?>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="#"><?php echo $linha['de']; ?></a></td>
                    <td class="mailbox-subject"><?php echo $linha['recado']; ?>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php echo $linha['created_at']; ?></td>
                  </tr>
                  <?php } ?>
                 


                </tbody>
                </table>
                <!-- /.table -->
              </div>
</div>
<!--  FIM CONTEUDO MODAL  -->

            </div>
        </div>
    </div>

    <!--##############  FIM RECADOS  ##############-->


        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>


    </div>
@else
       <div style="clear: both;"></div>
       <!-- Main Footer -->
       <footer class="main-footer" style="background: #252525; width: 100%; height: 200px; text-align: center">
           <strong>Copyright © 2018 <a href="#">Coobrastur</a>.</strong> All rights reserved.
       </footer>    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    Coobrastur
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
<script src="<?php echo $_ENV['APP_URL']; ?>js/ckeditor.js"></script>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })  
  })
</script>
   <!-- jQuery 3.1.1 -->
    <script src="<?php echo $_ENV['APP_URL']; ?>js/pace.min.js"></script>
<script src="<?php echo $_ENV['APP_URL']; ?>js/ckeditor.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

<script type="text/javascript" src="<?php echo $_ENV['APP_URL']; ?>lib/jquery.bgiframe.min.js"></script>
<script type="text/javascript" src="<?php echo $_ENV['APP_URL']; ?>lib/jquery.ajaxQueue.js"></script>
<script type="text/javascript" src="<?php echo $_ENV['APP_URL']; ?>lib/thickbox-compressed.js"></script>
<!--css -->
<link rel="stylesheet" type="text/css" href="<?php echo $_ENV['APP_URL']; ?>lib/thickbox.css"/>
<!--css -->
<link rel="stylesheet" type="text/css" href="<?php echo $_ENV['APP_URL']; ?>lib/jquery.autocomplete.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_ENV['APP_URL']; ?>lib/thickbox.css"/>
<style>
.rodape {
    position: absolute; 
    margin-left: 0;
    margin-bottom: 0; 
    background: #212C31; 
    width: 100%; 
    height: 285px;
    text-align: center;
    border-top: 1px solid #EBEFF4;
    color: #ccc;
}
.um {
    float: left;
    width: 31%;
    height: 230px;
    margin: 10px;
    font-family: Helvetica;
}
.btnRodape {
    font-family: Helvetica;
    color: #ccc;
    display: block;
    height: 25px;
    font-size: 19px;
    font-weight: bold;
}
.qr {
    float: left;
    margin: 7px;
    width: 65px;
    height: 65px;
    background: #3C8DBB;
    box-shadow: 1px 2px 10px #555;
    font-family: Helvetica;
    font-size: 25px;
    word-wrap: break-word;
    color: #fff;
    border-radius: 5px;
}
.qr:hover {
    background: #549EC7;
    box-shadow: 0px 0px 5px #fff;
    color: #fff;
    cursor: not-allowed;
}
.suggest {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 300px;
    height: 50px;
    background: #3C8DBB;
    border-top: 4px solid #fff;
    border-left: 4px solid #fff;
    line-height: 42px;
    text-align: center;
}
.linkS {
    color: #fff;
}
</style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    @yield('scripts')

       <!-- Main Footer -->
       <footer class="rodape">
           <div style="width: 100%; height: 30px;"></div>
           <div style="width: 80%; margin: 0 auto;">
           <div class="um">
                <img src="<?php echo $_ENV['APP_URL']; ?>img/logo-coobrastur.png" alt="Coobrastur Turismo" /><br /><br />
                <span style="display: block; width: 200px; margin: 0 auto; text-align: left;">
                    <b style="font-size: 19px;">myReport Coobrastur</b><br />
                    Sistema de gerenciamento<br /> de tarefas e controle interno.
                </span>
           </div>
           <div class="um">
           <span style="display: block; width: 350px; margin: 0 auto; text-align: left;">
               <br /><br /><br />
               <a class="btnRodape" href="<?php echo $_ENV['APP_URL']; ?>televenda" target="new">Ranking Televenda</a><br />  
               <a class="btnRodape" href="#">Ranking Representantes</a>
               </span>
           </div>
           <div class="um">
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/01.jpg);"></div>
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/02.jpg);"></div>
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/03.jpg);"></div>
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/04.jpg);"></div>

               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/05.jpg);"></div>
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/06.jpg);"></div>
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/07.jpg);"></div>
               <div class="qr" style="background-image: url(<?php echo $_ENV['APP_URL']; ?>img/08.jpg);"></div>
            </div>
           </div>
        </footer>
        <div class="suggest">
            <a class="linkS" href="" data-toggle="modal" data-target="#modalExemplo" id="botao" data-loading-text="Loading..."><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; Tem alguma sugestão de melhoria?</a>
        </div>



<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sugestões</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo $_ENV['APP_URL']; ?>sug.php" method="post">
        <div class="form-group">
            <label>Estou na página:</label>
            <?php echo Request::url(); ?>
            <input type="hidden" name="url" value="<?php echo Request::url(); ?>">
        </div>

        <div class="form-group">
            <label>Eu sou:</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $userName; ?>">
        </div>
        <div class="form-group">
            <label>Para qual página de departamento você quer enviar uma sugestão?</label>
            <select name="depto" class="form-control">
                <option>Marketing</option>
                <option>Relacionamento</option>
                <option>Negócios</option>
                <option>Hotéis</option>
                <option>Gestão Triton</option>
                <option>Televenda</option>
                <option>Projetos</option>
                <option>Demais funcionalidades</option>
            </select>
        </div>
        <div class="form-group">
            <label>Sugestão:</label>
            <textarea name="sugestao" class="form-control" rows="8"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar Feedback</button>
    </div>
    </form>
    </div>
  </div>
</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>