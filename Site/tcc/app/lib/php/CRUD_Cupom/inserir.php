<?php

include_once "../connect/conexao.php";

$cupom = $_POST['cupom'];
$data = $_POST['data'];
$desconto = $_POST['valor'];
$meta = $_POST['meta'];

    $sql -> query("INSERT INTO cupom(CODIGO, DESCONTO, META, VALIDADE) VALUES ('$cupom', '$desconto', '$meta', '$data')");  

    header("Location: ../../../view/gerenciador_cupom/Criar Cupom.html");
?>