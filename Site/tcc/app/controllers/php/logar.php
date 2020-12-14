<?php

    if(empty($_POST['email']) || empty($_POST['senha'])){
        header("Location: ../../view/adm/login.html");
        session_unset($_SESSION['ACESSO']);
        session_destroy();
    }

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        require '../../lib/php/connect/conexao_sessao.php';
        require 'usuario.class.php';

        $u = new Usuario();
        
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if($u -> login($email, $senha) == true){
            if(isset($_SESSION['ACESSO'])){
                header('Location: ../../view/adm/adm.php');
            }else{
                header('Location: ../../view/adm/login.html');
            }
        }else{
            header('Location: ../../view/adm/login.html');
        }
    }
    else{
        header('Location: ../../view/adm/login.html');
    }

    




/*
session_start();

    include "../connect/conexao.php";

    if(empty($_POST['email']) || empty($_POST['senha'])){
        header("Location: ../../../view/adm/login.html");
    }
    

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //pegar os valores e converter em string para a validação
    $email_conn = $sql->prepare('SELECT EMAIL FROM usuarios WHERE EMAIL=:validar_email'); //preperar
    $email_conn -> bindValue(':validar_email', $email); 
    $email_conn -> execute(); //executar
    $email_convert = $email_conn->fetch(PDO::FETCH_ASSOC); //conveter

    $senha_conn = $sql->prepare('SELECT SENHA FROM usuarios WHERE SENHA=:validar_senha'); 
    $senha_conn -> bindValue(':validar_senha', $senha); 
    $senha_conn -> execute(); 
    $senha_convert = $senha_conn->fetch(PDO::FETCH_ASSOC);
    
    $tipo_conn = $sql->prepare('SELECT TIPO FROM usuarios WHERE SENHA=:validar_senha AND EMAIL=:validar_email'); 
    $tipo_conn -> bindValue(':validar_senha', $senha); 
    $tipo_conn -> bindValue(':validar_email', $email); 
    $tipo_conn -> execute(); 
    $tipo_convert = $tipo_conn->fetch(PDO::FETCH_ASSOC);

    $email_user = implode($email_convert);
    $senha_user = implode($senha_convert);
    $tipo = implode($tipo_convert);
    $sessao = $tipo;

    //if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true){}

    if($tipo === "1"){
        $_SESSION['email'] = $email_user;
        $_SESSION['senha'] = $senha_user;
        $_SESSION['sessao'] = $sessao;
        header("Location: ../../../view/adm/adm.php");
        exit();
    }
    else{
        unset($_SESSION[$email_user]);
        unset($_SESSION[$senha_user]);
        unset($_SESSION[$sessao]);
        header("Location: ../../../view/adm/login.html");
    }*/
?>