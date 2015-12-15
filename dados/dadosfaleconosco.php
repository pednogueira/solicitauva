<?php
include_once './php/validar.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>fale conosco</title>

        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--jquery-->
        <script type='text/javascript' src="_js/jquery1-8-2.min.js"></script>
        <script type='text/javascript' src="_js/jquery.mask.min.js"></script>
        <script type='text/javascript' src="_js/scripts.js"></script>

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
                        <li class=""><a href="index.php">Eventos<span class="sr-only"></span></a></li>
                        <li class=""><a href="faleconosco.php">Fale Conosco (Emails)<span class="sr-only"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

            <?php
            $id = $_GET['id'];

            $con = mysqli_connect("localhost", "root", "uva123", "fale_conosco");

            $sql = "select * from Leads where id = " . $id;
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <form class="form-group form" action="php/responder.php" method="POST">

                        <h2>Dados de <?php echo $row['nome'] ?></h2>

                        <div class="col-xs-6">
                            <label>Nome</label>
                            <input class="form-control" readonly="readonly" value="<?php echo $row['nome'] ?>" name="nome">
                            <input class="hidden" name="login" value="<?php echo $login ?>">
                        </div>

                        <div class="col-xs-6">
                            <label>Email</label>
                            <input  class="form-control" name="email" readonly="readonly" value="<?php echo $row['email'] ?>">
                        </div>

                        <div class="col-xs-6">
                            <label>Telefone</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['telefone'] ?>">
                        </div>
                        <div class="col-xs-6">
                            <label>CPF</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['cpf'] ?>">
                        </div>
                        <div class="col-xs-4">
                            <label>Campus</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['campus'] ?>">
                        </div>
                        <div class="col-xs-4">
                            <label>Tipo de Curso</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['tipo'] ?>">
                        </div>
                        <div class="col-xs-4">
                            <label>Curso</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['curso'] ?>">
                        </div>
                        <div class="col-xs-6">
                            <label>Matrícula</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['matricula'] ?>">
                        </div>
                        <div class="col-xs-6">
                            <label>Data</label>
                            <input type="text" class="form-control"  readonly="readonly" value="<?php echo $row['registro'] ?>">
                        </div>
                        <div class="col-xs-6 hidden">
                            <label>Id</label>
                            <input type="text" value="<?php echo $row['id'] ?>" name="id">
                        </div>

                        <div class="col-xs-12">
                            <label>Mensagem</label>
                            <textarea class="form-control" rows="10" readonly="readonly" name="msg"><?php echo $row['msg'] ?></textarea>
                        </div>
                        <?php
                    }
                }
                ?>

                <div class="col-xs-12">
                    <label>Responder: </label>
                    <textarea class="form-control" rows="5" name="resp"></textarea>
                </div>
                <div class="col-xs-4 floatright">
                    <input class="btn  btn-success col-xs-12" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
