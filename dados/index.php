<?php
include_once './php/validar.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Solicitação para o Marketing</title>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/jquery.maskedinput.js"></script>
        <link rel="stylesheet" href="css/style.css">
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
                        <li class="active"><a href="index.php">Eventos<span class="sr-only"></span></a></li>
                        <li class=""><a href="faleconosco.php">Fale Conosco (Emails)<span class="sr-only"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="col-xs-12 col-md-12  table_p">
                <table class="table table-striped table_dados">
                    <thead>
                        <tr>
                            <th>Solicitação</th>
                            <th>Nome do evento</th>
                            <th>Local / Campus</th>
                            <th>Data do evento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../persistence/conexao.php';
                        $sql = "select * from solicitacoes";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['solicito'] ?></td>
                                    <td><?php echo $row['evento'] ?></td>
                                    <td><?php echo $row['local'] ?></td>
                                    <td><?php echo $row['data'] ?></td>
                                    <th><a class="btn btn-primary  btn-block" href="dado.php?id=<?php echo $row["id"] ?>">Vizualizar</a></th>
                                    <th><a class="btn btn-danger  btn-block" href="php/excluir.php?id=<?php echo $row["id"] ?>">Excluir</a></th>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
