<?php

include "conecta_mysql.inc";
$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_funcionario = $_REQUEST["cod_funcionario"];
    $nome = $_REQUEST["nome"]; 
    $crm = $_REQUEST["crm"];
    $espec = $_REQUEST["especialidade"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $telefone = $_REQUEST["telefone"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    $sql = "UPDATE funcionario SET nome = '$nome', crm = '$crm', especialidade = '$espec',  data_nasc = '$data_nasc', telefone = '$telefone', email = '$email', senha = '$senha'";
    $sql .= "WHERE cod_funcionario = $cod_funcionario;";  
    mysqli_query($mysqli,$sql);
        
    header('location: funcionarios.php');
}

elseif ($operacao == "buscar"){

}

?>