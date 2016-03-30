<?php

// verifica se existe POST ou login e senha. ELSE volta para o login.
if (!empty($_POST) AND ( empty($_POST['login']) OR empty($_POST['senha']))) {
    header("Location:login.php");
    exit;
}

require '../persistence/conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "select * from usuario where login ='" . $login . "'and senha ='" . $senha . "'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) != 1) {
    $msg = "Login Invalido";
} else {
    $resultado = mysqli_fetch_array($result);

    if (!isset($_SESSION))
        session_start();

    $_SESSION['id'] = $resultado['id'];
    $_SESSION['login'] = $resultado['login'];
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['nivel'] = $resultado['nivel'];

    if ($_SESSION['nivel'] == 2) {
        header("Location:index.php");
        exit();
    } else {
        header("Location:login.php");
        $msg = "Login não possui acesso a esse sistema.";
        exit();
    }
}
?>

<script type="text/javascript">
    alert('<?php echo $msg ?>');
    location.href = "login.php";
</script>
