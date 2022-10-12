<?php
include "autentica.php";
include "conecta_mysql.inc";

$cad_adm= $_REQUEST["cadadm"];

if ($cad_adm == 'adm'){

    $nome = $_REQUEST["nome"]; 
    $user = $_REQUEST ["username"];
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"];

    /*$sql = "SELECT * FROM administrador;";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro_email = 0;
    $erro_tel = 0;
    $erro_user = 0;
    $cont = 0;

    for($i=0; $i < $linhas; $i++){
        $resultado = mysqli_fetch_array($res);
        
        if($resultado['email'] == $email){ 
            $erro_email = 1;
            $cont ++;
        }
        if($resultado['telefone'] == $telefone){
            $erro_tel = 1;
            $cont ++;
        }
        if($resultado['username'] == $user){
            $erro_user = 1;
            $cont ++;
        }
        if($cont == 3){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>E-mail, telefone e nome de usuário já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_user == 1)){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>E-mail e nome de usuário já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_user == 1)){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>Telefone e nome de usuário já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif($erro_user == 1){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>Nome de usuário já cadastrado</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg1'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";
            header("Location: perfil.php");
            exit;
        }
        
    }*/

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO administrador (nome, username, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$user','$data_nasc','$telefone','$email','$senha_cript');";  
    mysqli_query($mysqli,$sql);

    header ('location: adm.php');
}
?>