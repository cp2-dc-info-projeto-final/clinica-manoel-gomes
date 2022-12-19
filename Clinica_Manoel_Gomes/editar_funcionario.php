<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_funcionario = $_REQUEST["cod_funcionario"];
    $nome = $_REQUEST["nome"];
    $servico = $_REQUEST["servico"]; 
    $crm = $_REQUEST["crm"];
    $espec = $_REQUEST["especialidade"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $telefone = $_REQUEST["telefone"]; 
    $email = $_REQUEST["email"]; 
    
    $sql = "SELECT * FROM funcionario WHERE cod_funcionario != '$cod_funcionario'";
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
            $_SESSION['msg4'] = "<div class='alert alert-danger'>E-mail, telefone e CRM já cadastrados</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg4'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_crm == 1)){
            $_SESSION['msg4'] = "<div class='alert alert-danger'>E-mail e CRM já cadastrados</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_crm == 1)){
            $_SESSION['msg4'] = "<div class='alert alert-danger'>Telefone e CRM já cadastrados</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg4'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        elseif($erro_crm == 1){
            $_SESSION['msg4'] = "<div class='alert alert-danger'>CRM já cadastrado</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg4'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";

            $_SESSION['cod_funcionario'] = $cod_funcionario;

            header("Location: altera_funcionario.php");
            exit;
        }
        else{

            $sql = "UPDATE funcionario SET nome = '$nome', crm = '$crm', tipo_servico ='$servico', especialidade = '$espec',  data_nasc = '$data_nasc', telefone = '$telefone', email = '$email'";
            $sql .= "WHERE cod_funcionario = '$cod_funcionario'";
            mysqli_query($mysqli,$sql);
        
            session_destroy('cod_funcionario');

            header('location: funcionarios.php');
        }
    }

}

?>