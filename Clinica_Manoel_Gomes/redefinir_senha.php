<?php

$cpf = $_REQUEST["cpf"];

include "conecta_mysql.inc";
$sql= "SELECT * FROM paciente WHERE cpf = $cpf";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);

$resultado = mysqli_fetch_array ($res);

if($resultado["cpf"] == $cpf){

    include "envia_email.php";

    $para = $resultado["email"];
    $assunto = "teste";
    $mensagem = "Olá teste";

    envia_email($para, $assunto, $mensagem);

    $_SESSION['msg_red_paciente'] = "<div class='alert alert-success' role='alert'>Enviamos uma mensagem para o seu email</div>";
    header("Location: form_red_cliente.php");

    exit;
}

if(empty($resultado)){
    $_SESSION['msg_red_paciente'] = "<div class='alert alert-danger'>CPF não encontrado</div>";
    header("Location: form_red_cliente.php");  
    exit;
}

?>