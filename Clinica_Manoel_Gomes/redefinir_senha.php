<?php

session_start();

include "conecta_mysql.inc";

$cpf = $_REQUEST["cpf"];

$sql= "SELECT * FROM paciente WHERE cpf = '$cpf'";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);

$resultado = mysqli_fetch_array ($res);

$code = rand(100000,999999);

if($resultado["cpf"] == $cpf){

    include "envia_email.php";

    $para = $resultado["email"];
    $assunto = "Recuperação de Senha";

    $mensagem = "Seu código de verificação é: $code";

    envia_email($para, $assunto, $mensagem);

    $_SESSION['msg_red_paciente'] = "<div class='alert alert-success' role='alert'>Enviamos uma mensagem para o seu email</div>";
    header("Location: red_senha.php");

    $_SESSION['cod_senha'] = $code;
    $_SESSION['cpf_cliente'] = $cpf;

}
else{
    $_SESSION['msg_red_paciente'] = "<div class='alert alert-danger'>CPF não encontrado</div>";
    header("Location: form_red_cliente.php");  
    exit;
}

?>
