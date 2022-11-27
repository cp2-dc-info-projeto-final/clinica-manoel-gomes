<?php
session_start();

$cod = $_SESSION["cod_senha"];
$cod_senha = $_REQUEST["cod_senha"];

if($cod == $cod_senha){
    header("Location: form_red_senha.php");
}
else{
    header("Location: red_senha.php");
    $_SESSION["erro_cod"] = "<div class='alert alert-danger'>Código incorreto!</div>"; 
}

?>