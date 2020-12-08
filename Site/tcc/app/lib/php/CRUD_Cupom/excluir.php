<?php
include_once "../../lib/php/connect/conexao.php";

$id = "$_GET[ID_CUPOM]";
$sql -> query("DELETE FROM cupom WHERE ID_CUPOM = '$id';");


echo"$id<br>";

header("Location: ../../view/adm/lista_cupom.php");
?>