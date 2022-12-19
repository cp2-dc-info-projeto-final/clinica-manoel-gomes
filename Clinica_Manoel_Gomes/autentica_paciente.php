<?php
    session_start();
    if(isset($_SESSION["cpf"])){
        $cpf = $_SESSION["cpf"];
    }
    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }
    if(empty($cpf) OR empty($senha)){
        $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Você não está logado como paciente!</div>";
        header ("location: index.php");
        exit;
    }
    else{
        include "conecta_mysql.inc";
        $sql = "SELECT * FROM paciente WHERE cpf = '$cpf'";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["cpf"]);
            unset($_SESSION["senha"]);
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Você não está logado como paciente!</div>";
            header ("location: index.php");
            exit;
        }
        else{
            $adm = mysqli_fetch_array($res);
            // testa se a senha está errada
            if(!hash_equals($senha, $adm['senha'])){
                unset($_SESSION["cpf"]);
                unset($_SESSION["senha"]);
                $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Você não está logado como paciente!</div>";
                header ("location: index.php");
                exit;
            }
        }
        mysqli_close($mysqli);
    }
?>