<?php
include_once './php/validar.php';
?>


<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--jquery-->
        <script type='text/javascript' src="_js/jquery1-8-2.min.js"></script>
        <script type='text/javascript' src="_js/jquery.mask.min.js"></script>
        <script type='text/javascript' src="_js/scripts.js"></script>

        <link rel="stylesheet" type="text/css" href="http://www.uva.br/web/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_omega.css">
        <link rel="stylesheet" type="text/css" href="http://www.uva.br/web/dhtmlxCalendar/codebase/dhtmlxcalendar.css">
        <script src="http://www.uva.br/web/dhtmlxCalendar/codebase/dhtmlxcalendar.js"></script>

        <title>Solicita Uva</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="../public/imgs/logo1.png" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">  
                        <li class="active"><a href="index.php">Painel de Controle<span class="sr-only"></span></a></li>
                        <li class=""><a href="../index.php">Solicitar<span class="sr-only"></span></a></li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <header class="col-xs-12">
                <div class="col-md-6 col-sm-6">
                    <img src="imgs/logouva.png" class="img-responsive">
                </div> 
                <div class="col-md-6 col-sm-6 titulo">
                </div>
                <div class="col-xs-12 line-black">
                    <p>informações gerais</p>
                </div>
            </header>

            <?php
            $id = $_GET['id'];

            require '../persistence/conexao.php';
            $sql = "select * from solicitacoes where id =" . $id;

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <form class="" id="form">

                        <div class="form-group col-md-7 col-sm-4 col-xs-12">   
                            <label>Coordenador Responsável: </label>
                            <input type="text"  class="form-control required" value="<?php echo $row['coordenador'] ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group col-md-2 col-sm-4 col-xs-12">   
                            <label>Telefone: </label>
                            <input type="tel"  class="form-control required" value="<?php echo $row['tel'] ?>" readonly="readonly"/>
                        </div>
                        <div class="form-group col-md-3 col-sm-4 col-xs-12">   
                            <label>Email: </label>
                            <input type="email" class="form-control" value="<?php echo $row['email'] ?>" readonly="readonly"/>
                        </div>


                        <div class="form-group col-xs-12">
                            <div class="divisoria">
                            </div>
                        </div> 

                        <div class="form-group col-md-12 col-sm-12">   
                            <label>Título: </label>
                            <input type="text" class="form-control required" value="<?php echo $row['evento'] ?>" readonly="readonly"/>
                        </div>

                        <div class="form-group col-md-2 col-sm-4">   
                            <label>Data: </label>
                            <input type="text" value="<?php echo $row['data'] ?>" class="form-control" readonly="readonly"/>
                        </div>

                        <div class="form-group col-md-2 col-sm-4">   
                            <label>Hora de Início: </label>
                            <input type="text" value="<?php echo $row['hora_inicial'] ?>" class="form-control" readonly="readonly"/>
                        </div>
                        <div class="form-group col-md-2 col-sm-4">   
                            <label>Hora de Término: </label>
                            <input type="text" value="<?php echo $row['hora_final'] ?>" class="form-control" readonly="readonly"/>
                        </div>


                        <div class="form-group col-md-6 col-sm-12">   
                            <label>Observações: </label>
                            <input type="text" value="<?php echo $row['obs'] ?>" class="form-control" readonly="readonly"/>
                        </div>


                        <div class="form-group col-md-3 col-sm-4">   
                            <label>Campus:</label>
                            <input type="text" value="<?php echo $row['campus'] ?>" class="form-control" readonly="readonly"/>
                        </div>
                        <div class="form-group col-md-6 col-sm-4">   
                            <label>Local</label>
                            <input type="text" value="<?php echo $row['local'] ?>" class="form-control" readonly="readonly"/>
                        </div>
                        <div class="form-group col-md-3 col-sm-4">   
                            <label>Valor:</label>
                            <input type="text" value="<?php echo $row['valor'] ?>" class="form-control" readonly="readonly"/>
                        </div>

                        <div class="form-group col-xs-12">
                            <div class="divisoria">
                            </div>
                        </div> 


                        <div class="form-group col-md-6 col-sm-12" style="display: table;">   
                            <label>Público Alvo</label>
                            <textarea type="text"  class="form-control" readonly="readonly" rows="4"><?php echo $row['publico_alvo']; ?></textarea>
                        </div>

                        <div class="col-md-3 col-sm-12">   
                            <div class="form-group">
                                <label>Atividade complementar: </label>
                                <input type="text" value="<?php echo $row['atividade_comp'] ?>" class="form-control" readonly="readonly"/>
                            </div>



                            <div class="form-group">
                                <label>Público estimado: </label>
                                <input type="text" value="<?php echo $row['publico_est'] ?>" class="form-control" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="form-group col-md-3 col-sm-12">   
                            <label>Será necessario inscrição?</label>
                            <input type="text"  class="form-control" readonly="readonly" value="<?php echo $row['nec_inscricao'] ?>"/>
                        </div>
                        <div class="form-group col-md-3 col-sm-12">  
                            <label>Oferece certificado?</label>
                            <input type="text"  class="form-control" readonly="readonly" value="<?php echo $row['certificado'] ?>"/>
                        </div>

                        <div class="form-group col-xs-12">
                            <div class="divisoria"></div>
                        </div> 

                        <div class="form-group col-sm-12">
                            <label>Objetivo | Descrição | Expectativas: </label>
                            <textarea class="form-control" rows="5" readonly="readonly"><?php echo $row['objetivo'] ?></textarea>
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Programação completa: </label>
                            <textarea class="form-control" rows="5" readonly="readonly"><?php echo $row['programacao'] ?></textarea>
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Convidados | Palestrantes - Perfil Profissional: </label>
                            <textarea class="form-control" rows="5" readonly="readonly"><?php echo $row['convidados'] ?></textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label>Parceiros | Apoio: </label>
                            <textarea class="form-control" rows="4" readonly="readonly"><?php echo $row['parceiros'] ?></textarea>
                            <label>Outras informações: </label>
                            <textarea class="form-control" rows="4" readonly="readonly"><?php echo $row['outrasInfos'] ?></textarea>
                        </div>
                        <div class="form-group  col-md-6 col-sm-12">   
                            <label>Forma de divulgação:</label>
                            <textarea class="form-control" rows="10" readonly="readonly"><?php echo $row['divulgacao'] ?><?php echo $row['banner'] ?><?php echo $row['cartaz'] ?><?php echo $row['filipeta'] ?> <?php echo $row['outrasDivulga'] ?></textarea>
                            <?php
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>
