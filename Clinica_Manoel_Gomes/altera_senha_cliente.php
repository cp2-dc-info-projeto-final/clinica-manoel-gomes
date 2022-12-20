<?php 
session_start();

include "conecta_mysql.inc";

$operacao = $_REQUEST['operacao'];

if($operacao == "editar_senha"){

    $cpf_cliente = $_SESSION["cpf_cliente"];
    $nova_senha = $_REQUEST["nova_senha"];

    $senha_cript = password_hash($nova_senha, PASSWORD_DEFAULT);

    $sql = "UPDATE paciente SET senha = '$senha_cript'";
    $sql .= "WHERE cpf = '$cpf_cliente'";
    mysqli_query($mysqli,$sql);

    $_SESSION['msg_senha'] = "<div class='alert alert-success'>Senha Atualizada!</div>";

    header('location: form_loginpaciente.php');

}

?>