<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $nome = $_REQUEST["nome"]; 
    $cpf_novo = $_REQUEST["cpf"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $telefone = $_REQUEST["telefone"]; 
    $email = $_REQUEST["email"]; 
    
    $sql = "SELECT * FROM paciente WHERE cpf != '$cpf'";
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
        if($resultado['cpf'] == $cpf_novo){
            $erro_cpf = 1;
            $cont ++;
        }
        if($cont == 3){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail, telefone e CPF já cadastrados</div>";

            header("Location: altform_cliente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";

            header("Location: altform_cliente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_cpf == 1)){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail e CPF já cadastrados</div>";

            header("Location: altform_cliente.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_cpf == 1)){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Telefone e CPF já cadastrados</div>";

            header("Location: altform_cliente.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";


            header("Location: altform_cliente.php");
            exit;
        }
        elseif($erro_cpf == 1){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>CPF já cadastrado</div>";

            header("Location: altform_cliente.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";

            header("Location: altform_cliente.php");
            exit;
        }
        else{

            $sql = "UPDATE paciente SET nome = '$nome', cpf = '$cpf_novo',  data_nasc = '$data_nasc', telefone = '$telefone', email = '$email'";
            $sql .= "WHERE cpf = '$cpf'";
            mysqli_query($mysqli,$sql);

            if (!mysqli_query($mysqli,$sql)){
                echo mysqli_error($mysqli);
                exit;
            }
            
        
            header('location: perfil_paciente.php');
        }
    }

}

?>