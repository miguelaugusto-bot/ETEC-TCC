<?php

class Usuario{

    public function login($email, $senha){
        global $sql;

        $insert = "SELECT * FROM usuarios WHERE EMAIL = :email AND SENHA = :senha";
        $insert = $sql -> prepare($insert);
        $insert -> bindValue("email", $email);
        $insert -> bindValue("senha", $senha);
        $insert -> execute();

        if($insert->rowCount() > 0){
            $dados = $insert -> fetch();

            $_SESSION['ACESSO'] = $dados['TIPO'];
            $_SESSION['EMAIL'] = $dados['EMAIL'];
            $_SESSION['SENHA'] = $dados['SENHA'];

            return true;
        }else{
            return false;
        }
    }
}
?>