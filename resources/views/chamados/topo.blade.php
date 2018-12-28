<style type="text/css">
    .boxCentral {
        float: left;
        width: 100%;
        background:#3C8CBB;
        margin-bottom: 15px;
    }
    .logoCentral {
        margin: 10px;
        float: left;
    }
    .botoes {
        float: right;
        margin-top: 40px;
        margin-right: 30px;
    }


@media only screen and (max-width: 1330px) {
    .botoes {
        float: right;
        margin-top: -40px;
        width: 540px;
    }
    .logoCentral {
        width: 400px;
    }
}
</style>
<div class="boxCentral">
            <img class="logoCentral" src="<?php echo $_ENV['APP_URL']; ?>img/logo-fale-conosco.png" alt="Central do Usuário" />
            <div class="botoes">
                <a class="btn btn-default" href="<?php echo $_ENV['APP_URL']; ?>chamados">
                   TODOS <span class="badge"></span>
                </a>
                <a class="btn btn-default" href="<?php echo $_ENV['APP_URL']; ?>chamados?c=aberto">
                   ABERTOS <span class="badge"></span>
                </a>
                <a class="btn btn-default" href="<?php echo $_ENV['APP_URL']; ?>chamados?c=andamento">
                   EM ANDAMENTO <span class="badge"></span>
                </a>
                <a class="btn btn-default" href="<?php echo $_ENV['APP_URL']; ?>chamados?c=pausa">
                   EM PAUSA <span class="badge"></span>
                </a>
                <a class="btn btn-default" href="<?php echo $_ENV['APP_URL']; ?>chamados?c=encerrado">
                   ENCERRADOS <span class="badge"></span>
                </a>
            </div>
</div>