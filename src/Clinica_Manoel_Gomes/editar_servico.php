<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_servico = $_REQUEST["cod_servico"];
    $nome = $_REQUEST["nome"]; 
    $descricao = $_REQUEST["descricao"];
    $tipo_servico = $_REQUEST["tipo_servico"];
    
    $sql = "SELECT * FROM servicos WHERE cod_servico != $cod_servico;";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro = 0;

    for($i=0; $i < $linhas; $i++){
        $resultado = mysqli_fetch_array($res);
        
        if($resultado['nome'] == $nome){ 
            $erro = 1;
        }
        if($erro == 1){
            $_SESSION['msg_servico'] = "<div class='alert alert-danger'>Serviço já cadastrado</div>";

            $_SESSION['cod_servico'] = $cod_servico;

            header("Location: altera_servico.php");
            exit;
        }
    }

    $sql = "UPDATE servicos SET nome = '$nome', descricao = '$descricao', tipo_servico = '$tipo_servico'";
    $sql .= "WHERE cod_servico = $cod_servico;";
    mysqli_query($mysqli,$sql);
        
    header('location: servicos.php');

    session_destroy(['cod_servico']);
}

?>