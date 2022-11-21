<?php
include "conecta_mysql.inc";
include "envia_email.php";

session_start();

$cadastro= $_REQUEST["cad"];

if ($cadastro == 'paciente'){

    $nome = $_REQUEST["nome"]; 
    $cpf = $_REQUEST["cpf"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"];
    
    $sql = "SELECT * FROM paciente;";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro_email = 0;
    $erro_tel = 0;
    $erro_cpf = 0;
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
        if($resultado['cpf'] == $cpf){
            $erro_cpf = 1;
            $cont ++;
        }
        if($cont == 3){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>E-mail, telefone e CPF já cadastrados</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_cpf == 1)){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>E-mail e CPF já cadastrados</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_cpf == 1)){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>Telefone e CPF já cadastrados</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        elseif($erro_cpf == 1){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>CPF já cadastrado</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg5'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";
            header("Location: cad_paciente.php");
            exit;
        }
        
    }

    $para = $email;
    $assunto = "Boas Vindas";
    $mensagem = "Olá $nome, seja bem vindo(a)!";

    envia_email($para, $assunto, $mensagem);


    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
   
    $sql = "INSERT INTO paciente (nome, cpf, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$cpf','$data_nasc','$telefone','$email','$senha_cript');";  
    mysqli_query($mysqli,$sql);

    header ('location: index.php');

}

?>
