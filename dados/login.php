<html>
    <head>
        <meta charset="UTF-8">
        <title>Solicitação para o Marketing</title>

        <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="../public/css/style.css" type="text/css">

        <!--jquery-->
        <script type='text/javascript' src="public/_js/jquery1-8-2.min.js"></script>
        <script type='text/javascript' src="public/_js/jquery.mask.min.js"></script>
        <script type='text/javascript' src="public/_js/scripts.js"></script>

        <link rel="stylesheet" type="text/css" href="http://www.uva.br/web/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_omega.css">
        <link rel="stylesheet" type="text/css" href="http://www.uva.br/web/dhtmlxCalendar/codebase/dhtmlxcalendar.css">
        <script src="http://www.uva.br/web/dhtmlxCalendar/codebase/dhtmlxcalendar.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="../public/imgs/logo1.png" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">  
                        <li class=""><a href="../index.php">Solicitar<span class="sr-only"></span></a></li>
                        <li class="active"><a href="index.php">Painel de Controle<span class="sr-only"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="validacao.php" method="post" class="form form-group">
            <div class="container" id="container-1">
                <div class="header">
                    <div class="col-xs-12">
                        <img src="../public/imgs/logouva.png" class="img-responsive">
                    </div>
                    <div class="col-xs-12">
                        <p>Sistema de cadastro de Solicitações de Eventos</p>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label></label>
                    <input type="text" class="form-control" placeholder="Login" name="login">
                </div>
                <div class="col-xs-12">
                    <label></label>
                    <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>
                <div class="col-xs-12">
                    <br/>
                    <input type="submit" value="Entrar" class="btn btn-success col-xs-12">
                </div>
            </div>
        </form>
    </body>
</html>
