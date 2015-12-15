<?php

require '../../class/Leads.php';

$id = $_GET['id'];
var_dump($id);

$data = date("d/m/Y");

$nova = calculaPrazo($data);

echo $nova;
?>