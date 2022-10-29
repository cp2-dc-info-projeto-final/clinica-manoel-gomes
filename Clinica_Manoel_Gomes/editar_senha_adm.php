<?php 
include "autentica.php";
include "conecta_mysql.inc";

$operacao = $_REQUEST['operacao'];

if($operacao == "editar_senha"){

    $cod_admin = $_REQUEST["cod_admin"];
    $senha_atual = $_REQUEST["senha_atual"]; 
    $nova_senha = $_REQUEST["nova_senha"];
    
    $sql = "SELECT * FROM administrador WHERE cod_admin = $cod_admin;";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $resultado = mysqli_fetch_array($res);
    
    if(!password_verify($senha_atual, $resultado["senha"])){ 
        $_SESSION['msg_senha'] = "<div class='alert alert-danger'>Senha atual inválida!</div>";

        $_SESSION['cod_senha_adm'] = $cod_admin;

        header("Location: altera_senha_adm.php");
        exit;
    }
    else{
        $senha_cript = password_hash($nova_senha, PASSWORD_DEFAULT);
    
        $sql = "UPDATE administrador SET senha = '$senha_cript'";
        $sql .= "WHERE cod_admin = $cod_admin;";  
        mysqli_query($mysqli,$sql);
    
        $_SESSION['msg_senha'] = "<div class='alert alert-success'>Senha Atualizada!</div>";
            
        header('location: adm.php');
    
        session_destroy(['cod_senha_adm']);
        }
}
    


?>