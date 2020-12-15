<?php

include_once "../connect/conexao.php";

$nome = $_GET['name'];
$pontos = intval($_GET['pontos']);


    $dados = "INSERT INTO game(USERNAME,PONTOS) VALUES('$nome',$pontos)";

    if ($sql->query($dados)===TRUE){
        echo "Sucesso";
    }else{
        echo "Falhou";
    }

?>