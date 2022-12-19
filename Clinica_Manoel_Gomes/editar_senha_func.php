<?php 
include "autentica.php";
include "conecta_mysql.inc";

$operacao = $_REQUEST['operacao'];

if($operacao == "editar_senha"){

    $cod_funcionario = $_REQUEST["cod_funcionario"];
    $senha_atual = $_REQUEST["senha_atual"]; 
    $nova_senha = $_REQUEST["nova_senha"];
    
    $sql = "SELECT * FROM funcionario WHERE cod_funcionario = '$cod_funcionario'";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $resultado = mysqli_fetch_array($res);

    if(!password_verify($senha_atual, $resultado["senha"])){ 
        $_SESSION['msg_senha'] = "<div class='alert alert-danger'>Senha atual inválida!</div>";

        $_SESSION['cod_senha_func'] = $cod_funcionario;

        header("Location: altera_senha_func.php");
        exit;
    }
    else{
        $senha_cript = password_hash($nova_senha, PASSWORD_DEFAULT);
    
        $sql = "UPDATE funcionario SET senha = '$senha_cript'";
        $sql .= "WHERE cod_funcionario = $cod_funcionario;";  
        mysqli_query($mysqli,$sql);
    
        $_SESSION['msg_senha'] = "<div class='alert alert-success'>Senha Atualizada!</div>";
            
        header('location: funcionarios.php');
    
        session_destroy(['cod_senha_func']);
        }
}
    


?>