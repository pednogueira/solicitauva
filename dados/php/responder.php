
<?php
$login = $_POST['login'];
$id = $_POST['id'];
$nome = $_POST['nome'];
$pergunta = $_POST['msg'];

$resposta = "Caro $nome <br/><br/>"
        . "Estamos retornando para exclarecimento de suas dúvidas através do canal Fale Conosco: <br/><br/>"
        . "Sua pergunta: <br/> $pergunta <br/><br/> Resposta: <br/>" . $_POST['resp'];

$email = $_POST['email'];

include_once 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer();

$mail->CharSet = "UTF-8";
$mail->isSMTP();

$Host = '10.2.100.3';
$Username = "operador";
$Username_email = "operador@uva.br";
$Password = "Aa12345678";
$Port = "25";

$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
$mail->SMTPSecure = 'tls';
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->From = "operador@uva.br"; // Seu e-mail
$mail->Sender = "operador@uva.br"; // Seu e-mail
$mail->FromName = "UVA"; // Seu nome

$mail->addAddress($email);

$mail->Subject = "Universidade Veiga de Almeida"; // Assunto da mensagem
//$mail->MsgHTML($body);
$mail->IsHTML(true);
$mail->Body = $resposta;
//$mail->AltBody = 'Este Ã© o corpo da mensagem de teste, em Texto Plano! ';
$enviado = $mail->send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
    $msg = "Email Respondido";

    $con = mysqli_connect("localhost", "root", "uva123", "fale_conosco");
    $sql = "update Leads set respondido = 'respondido', por = '$login' where id = " . $id;
    $result = mysqli_query($con, $sql);
} else {
    $msg = "Erro ao responder email.";
    echo $mail->ErrorInfo;
}
?>

<script>

    alert("<?php echo $msg ?>");
    location.href = "../faleconosco.php";

</script>