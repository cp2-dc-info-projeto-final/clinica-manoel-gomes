<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_paciente = $_REQUEST["cod_paciente"];
    $nome = $_REQUEST["nome"]; 
    $cpf = $_REQUEST["cpf"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $telefone = $_REQUEST["telefone"]; 
    $email = $_REQUEST["email"]; 
    
    $sql = "SELECT * FROM paciente WHERE cod_paciente != $cod_paciente;";
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
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail, telefone e CPF já cadastrados</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_cpf == 1)){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail e CPF já cadastrados</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_cpf == 1)){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Telefone e CPF já cadastrados</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        elseif($erro_cpf == 1){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>CPF já cadastrado</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg_paciente'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";

            $_SESSION['cod_paciente'] = $cod_paciente;

            header("Location: altera_cliente.php");
            exit;
        }
        else{

            $sql = "UPDATE paciente SET nome = '$nome', cpf = '$cpf',  data_nasc = '$data_nasc', telefone = '$telefone', email = '$email'";
            $sql .= "WHERE cod_paciente = $cod_paciente;";
            mysqli_query($mysqli,$sql);
        
            session_destroy('cod_paciente');

            header('location: clientes.php');
        }
    }

}

?>