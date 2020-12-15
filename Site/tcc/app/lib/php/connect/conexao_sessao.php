<?php
session_start();
    define( 'MYSQL_HOST', '187.45.196.198' ); //host
    define( 'MYSQL_USER', 'bd_cory' ); //username
    define( 'MYSQL_PASSWORD', 'Cory@123' ); //senha
    define( 'MYSQL_DB_NAME', 'bd_cory' ); //nome do banco de dados

global $sql;

    try //tentar conectar no banco de dados
    {
        $sql = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
        $sql -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch ( PDOException $e) //caso de erro
    {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
?>