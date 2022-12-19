<?php 
include "autentica_paciente.php";
include "conecta_mysql.inc";

$operacao = $_REQUEST['operacao'];

if($operacao == "editar_senha"){

    $senha_atual = $_REQUEST["senha_atual"]; 
    $nova_senha = $_REQUEST["nova_senha"];
    
    $sql = "SELECT * FROM paciente WHERE cpf = '$cpf'";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $resultado = mysqli_fetch_array($res);
    
    if(!password_verify($senha_atual, $resultado["senha"])){ 
        $_SESSION['msg_senha'] = "<div class='alert alert-danger'>Senha atual inválida!</div>";

        header("Location: altform_senha.php");
        exit;
    }
    else{
        $senha_cript = password_hash($nova_senha, PASSWORD_DEFAULT);
    
        $sql = "UPDATE paciente SET senha = '$senha_cript'";
        $sql .= "WHERE cpf = '$cpf'";  
        mysqli_query($mysqli,$sql);
    
        $_SESSION['msg_senha'] = "<div class='alert alert-success'>Senha Atualizada! Faça login novamente.</div>";
            
        header('location: form_loginpaciente.php');
    
        }
}
    


?>