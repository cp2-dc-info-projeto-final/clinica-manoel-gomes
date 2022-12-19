<?php
    session_start();
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }
    if(empty($username) OR empty($senha)){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Você não está logado como administrador!</div>";
        header ("location: index.php");
        exit;
    }
    else{
        include "conecta_mysql.inc";
        $sql = "SELECT * FROM administrador WHERE username = '$username'";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["username"]);
            unset($_SESSION["senha"]);
            $_SESSION['msg'] = "<div class='alert alert-danger'>Você não está logado como administrador!</div>";
            header ("location: index.php");
            exit;
        }
        else{
            $adm = mysqli_fetch_array($res);
            // testa se a senha está errada
            if(!hash_equals($senha, $adm['senha'])){
                unset($_SESSION["username"]);
                unset($_SESSION["senha"]);
                $_SESSION['msg'] = "<div class='alert alert-danger'>Você não está logado como administrador!</div>";
                header ("location: index.php");
                exit;
            }
        }
        mysqli_close($mysqli);
    }
?>