<?php
$id = $_GET['id'];


$con = mysqli_connect("localhost", "root", "uva123", "fale_conosco");
$sql = "delete from Leads where id = " . $id;

if (mysqli_query($con, $sql)) {
    $msg = "Pedido excluido com sucesso";
} else {
    $msg = "Erro ao excluir";
}
?>

<script type="text/javascript">

    alert('<?php echo $msg ?>');
    location.href = "../index.php";

</script>