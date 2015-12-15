<?php
require '../class/Leads.php';
require 'insereSolicita.php';

$leads = new Leads();

$leads->para = $_POST['para'];
$leads->solicito = $_POST['solicito'];

$leads->nome_coordenador = $_POST['nome_coordenador'];
$leads->tel_coordenador = $_POST['tel_coordenador'];
$leads->email_coordenador = $_POST['email_coordenador'];
$leads->nome_evento = $_POST['nome_evento'];
$leads->data_evento = $_POST['inicial'];
$leads->horai_evento = $_POST['horai_evento'];
$leads->horaf_evento = $_POST['horaf_evento'];
$leads->observacoes = $_POST['observacoes'];
$leads->campus = $_POST['campus'];
$leads->local = $_POST['local'];
$leads->valor = $_POST['valor'];

$leads->publicoalvo = juntarCheck($_REQUEST['publicoalvo']);
$leads->atComplementar = $_POST['atComplementar'];
$leads->publicoEstimado = $_POST['publicoEstimado'];
$leads->necInscricao = $_POST['necInscricao'];
$leads->certificado = $_POST['certificado'];

$leads->objetivo = $_POST['objetivo'];
$leads->progComplementar = $_POST['progComplementar'];
$leads->convidados = $_POST['convidados'];
$leads->parceiros = $_POST['parceiros'];
$leads->outrasInformacoes = $_POST['outrasInformacoes'];
$leads->divulgacao = juntarCheck($_POST['divulgacao']);

$leads->datacadastro = date("d/m/Y");
$leads->dataprazo = calculaPrazo($leads->datacadastro);

$leads->setQuantFilipeta($_POST['quantFilipeta']);
$leads->setquantCartaz($_POST['quantCartaz']);
$leads->setQuantBanner($_POST['quantBanner']);
$leads->setOutrosDivulgacao($_POST['outrosDivulgacao']);


if (insereSolicita($con, $leads)) {
    $msg = "Enviado com sucesso";
} else {
    $msg = "Erro ao enviar";
}
?>

<script>

    alert("<?php echo $msg ?>");
    location.href = "../index.php";

</script>