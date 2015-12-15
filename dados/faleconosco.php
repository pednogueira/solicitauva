
<?php
include_once './php/validar.php';
?>


<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Desenvolvimento</title>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/jquery.maskedinput.js"></script>
        <link rel="stylesheet" href="css/style.css">

        <script type="text/javascript" src="_js/jquery1-8-2.min.js"></script>
        <script type="text/javascript" src="_js/jquery.mask.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



        <script>
            $(function () {
                jQuery(function ($) {
                    $("#datainicial").mask("00-00-0000");
                    $("#datafinal").mask("00-00-0000");
                });
            });
        </script>

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
                        <li class="active"><a href="faleconosco.php">Fale Conosco (Emails)<span class="sr-only"></span></a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <?php
        $con = mysqli_connect("localhost", "root", "uva123", "fale_conosco");
        //$con = mysqli_connect("localhost", "root", "", "solicitamarketing");
        $resp = 0;

        $sql2 = "select * FROM Leads where respondido LIKE 'respondido'";

        $result2 = mysqli_query($con, $sql2);

        while (mysqli_fetch_array($result2) > 0) {
            $resp = $resp + 1;
        }
        ?>


        <div class="container-fluid article">

            <div class="col-xs-12 col-md-3 table_pleft">


                <form action="faleconosco.php" method="get">
                    <div class="col-xs-12">
                        <h2>Escolha a data</h2>
                    </div>
                    <div class="col-xs-6">
                        <label>De</label>
                        <input type="text" class="form-control" name="datainicial" id="datainicial">
                    </div>
                    <div class="col-xs-6">
                        <label>Até</label>
                        <input type="text" class="form-control" name="datafinal" id="datafinal">
                    </div>

                    <div class="col-md-12 col-xs-12 btn">
                        <button class="btn btn-primary btn-block">Pesquisar</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-md-8 table_p">

                <h2>Listagem de Leads do Fale Conosco
                    <span>Usuário: <?php echo $login ?></span>
                </h2>


                <table class="table table-striped hidden-xs">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Data</th>
                            <th></th>
                            <th></th>
                            <th>Respostas:  ( <span class="resp"><?php echo $resp ?></span> )</th>
                        </tr>
                    </thead>

                    <?php
                    $sql = "select * FROM Leads ORDER BY id desc LIMIT 25";
                    // $sql = "select * FROM fale_conosco ORDER BY id desc LIMIT 25";
                    $result = mysqli_query($con, $sql);

                    if (isset($_GET['datainicial']) AND isset($_GET['datafinal'])) {

                        $inicial = $_GET['datainicial'];
                        $final = $_GET['datafinal'];

                        $sql = "select * FROM Leads WHERE registro BETWEEN '" . $inicial . "' AND '" . $final . "' ORDER BY id desc";
                        $result = mysqli_query($con, $sql);
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {

                            if ($row['por'] == "") {
                                $respondido = "";
                            } else {
                                $respondido = "Por: ";
                            }
                            ?>
                            <tr>
                                <td><?php echo $row["nome"] ?></td>
                                <td><?php echo $row["tipo"] ?></td>
                                <td><?php echo $row["registro"] ?></td>
                                <th><a class="btn btn-primary  btn-block" href="dadosfaleconosco.php?id=<?php echo $row["id"] ?>">Visualizar</a></th>
                                <th><a class="btn btn-danger  btn-block" href="php/excluir.php?id=<?php echo $row["id"] ?>">Excluir</a></th>
                                <td><?php echo $respondido ?> <span class="respondido"> <br/><?php echo $row['por'] ?></span></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
