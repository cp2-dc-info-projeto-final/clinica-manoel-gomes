<?php
    session_start();
    if(isset($_SESSION["crm"])){
        $crm = $_SESSION["crm"];
    }
    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }
    if(empty($crm) OR empty($senha)){
        $_SESSION['msg_funcionario'] = "<div class='alert alert-danger'>Você não está logado como funcionário!</div>";
        header ("location: index.php");
        exit;
    }
    else{
        include "conecta_mysql.inc";
        $sql = "SELECT * FROM funcionario WHERE crm = '$crm';";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["crm"]);
            unset($_SESSION["senha"]);
            $_SESSION['msg_funcionario'] = "<div class='alert alert-danger'>Você não está logado como funcionário!</div>";
            header ("location: index.php");
            exit;
        }
        else{
            $adm = mysqli_fetch_array($res);
            // testa se a senha está errada
            if(!hash_equals($senha, $adm['senha'])){
                unset($_SESSION["crm"]);
                unset($_SESSION["senha"]);
                $_SESSION['msg_funcionario'] = "<div class='alert alert-danger'>Você não está logado como funcionário!</div>";
                header ("location: index.php");
                exit;
            }
        }
        mysqli_close($mysqli);
    }
?>