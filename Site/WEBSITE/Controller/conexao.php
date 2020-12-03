<?php

define( 'MYSQL_HOST', '187.45.196.155' ); //host
define( 'MYSQL_USER', 'bd_cory' ); //username
define( 'MYSQL_PASSWORD', 'Cory@123' ); //senha
define( 'MYSQL_DB_NAME', 'bd_cory' ); //nome do banco de dados

    try //tentar conectar no banco de dados
    {
        $sql = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
    }
    catch ( PDOException $e) //caso de erro
    {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }

?>