<?php



include_once "../connect/conexao.php";



$cupom = $_POST['cupom'];

$data = $_POST['data'];

$desconto = $_POST['valor'];

$meta = $_POST['meta'];


$arquivo = fopen('../../../view/jogo/jogo/teste.txt', 'w+');

if ($arquivo == false) die('não  criou arquivo');

fwrite($arquivo, $meta);

fclose($arquivo);





$arquivo = fopen('../../../view/jogo/jogo/codigo.txt', 'w+');

if ($arquivo == false) die('não  criou arquivo');

fwrite($arquivo, $cupom);

fclose($arquivo);


    $sql -> query("INSERT INTO cupom(CODIGO, DESCONTO, META, VALIDADE) VALUES ('$cupom', '$desconto', '$meta', '$data')");  



    header("Location: ../../../view/adm/gerar.php");

?>