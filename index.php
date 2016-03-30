<!DOCTYPE html>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Solicitação para o Marketing</title>

        <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="public/css/style.css" type="text/css">

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
                    <a class="navbar-brand" href="#"><img src="public/imgs/logo1.png" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">  
                        <li class="active"><a href="index.php">Solicitar<span class="sr-only"></span></a></li>
                        <li class=""><a href="dados/index.php">Painel de Controle<span class="sr-only"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="public/index.php" method="get" class="form form-group">
            <div class="container" id="container-1">
                <div class="header">
                    <div class="col-xs-12">
                        <img src="public/imgs/logouva.png" class="img-responsive">
                    </div>
                    <div class="col-xs-12">
                        <h3>Favor escolher abaixo o departamento e o tipo de solicitação que deseja.</h3>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label></label>
                    <select  name="para" class="required form-control"  required="required">
                        <option value="" selected="selected">Departamento</option>
                        <option value="Departamento Offline">Departamento Offline</option>
                        <option value="Departamento Online">Departamento Online</option>
                    </select>
                </div>
                <div class="col-xs-12">
                    <label></label>
                    <select  name="tipo" class="required form-control" required="required">
                        <option value="" selected="selected">Tipo de Solicitação</option>
                        <option value="Cadastramento de Eventos" >Cadastramento de Eventos</option>
                        <option value="Cadastramento de Novo Curso" >Cadastramento de Curso</option>
                    </select>
                </div>
                <div class="col-xs-12">
                    <br/>
                    <input type="submit" value="Enviar" class="btn btn-success col-xs-12">
                </div>
            </div>
        </form>
    </body>
</html>
