<?php

    session_start();

    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    include "conecta_mysql.inc";
    $sql = "SELECT * FROM paciente WHERE cpf = '$cpf'";
    $res = mysqli_query($mysqli, $sql);

    $paciente = mysqli_fetch_array($res);

    if(!password_verify($senha, $paciente["senha"]) or mysqli_num_rows($res) != 1){
        $_SESSION['msg_login_paciente'] = "<div class='alert alert-danger'>Senha ou nome de inválidos!</div>";
        header("Location: form_loginpaciente.php");
    }
    else{
        $_SESSION["cpf"] = $cpf;
        $_SESSION["senha"] = $paciente["senha"];
        
        $_SESSION['msg_login_paciente'] = "<div class='alert alert-success' role='alert'>Login realizado com sucesso!</div>";
        header("Location: index_paciente.php");

    }

?>