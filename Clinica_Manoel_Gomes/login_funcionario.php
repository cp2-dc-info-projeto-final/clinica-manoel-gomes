<?php

    session_start();

    $crm = $_POST["crm"];
    $senha = $_POST["senha"];

    include "conecta_mysql.inc";
    $sql = "SELECT * FROM funcionario WHERE crm = '$crm'";
    $res = mysqli_query($mysqli, $sql);

    $funcionario = mysqli_fetch_array($res);

    if(!password_verify($senha, $funcionario["senha"]) or mysqli_num_rows($res) != 1){
        $_SESSION['msg_login_funcionario'] = "<div class='alert alert-danger'>Senha ou nome de inválidos!</div>";
        header("Location: form_loginfuncionario.php");
    }
    else{
        $_SESSION["crm"] = $crm;
        $_SESSION["senha"] = $funcionario["senha"];

        header("Location: index_funcionario.php");
        $_SESSION['msg_login_funcionario'] = "<div class='alert alert-success' role='alert'>Login realizado com sucesso!</div>";
    }
?>