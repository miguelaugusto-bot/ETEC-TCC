<?php

require '../../lib/php/connect/conexao_sessao.php';

$id = $_GET['ID_CUPOM'];
$sql -> query("DELETE FROM cupom WHERE ID_CUPOM = '$id';");


echo"$id<br>";

header('Location: ../../view/adm/lista_cupom.php');
?>