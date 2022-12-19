<?php
include "autentica.php";
include "conecta_mysql.inc";

$cadastro_funcionario = $_REQUEST["cadfuncionario"];

if ($cadastro_funcionario == 'funcionario'){
    
    $nome = $_REQUEST["nome"]; 
    $crm = $_REQUEST["crm"]; 
    $servico = $_REQUEST["servico"];
    $espec = $_REQUEST["especialidade"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"];
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    $sql = "SELECT * FROM funcionario";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro_email = 0;
    $erro_tel = 0;
    $erro_crm = 0;
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
        if($resultado['crm'] == $crm){
            $erro_crm = 1;
            $cont ++;
        }
        if($cont == 3){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>E-mail, telefone e CRM já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_crm == 1)){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>E-mail e CRM já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_crm == 1)){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>Telefone e CRM já cadastrados</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif($erro_crm == 1){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>CRM já cadastrado</div>";
            header("Location: perfil.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg3'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";
            header("Location: perfil.php");
            exit;
        }
        
    }

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO funcionario (nome, crm, tipo_servico, especialidade, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$crm', '$servico', '$espec', '$data_nasc', '$telefone', '$email','$senha_cript');";  
    mysqli_query($mysqli,$sql);

    header ('location: funcionarios.php');

    if (!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
        exit;
    }

}

?>