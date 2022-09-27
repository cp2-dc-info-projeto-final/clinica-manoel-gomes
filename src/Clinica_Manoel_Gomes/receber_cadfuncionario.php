<?php  include "conecta_mysql.inc"; ?>
<?php

$cadastro_funcionario = $_REQUEST["cadfuncionario"];

if ($cadastro_funcionario == 'funcionario'){
    
    $nome = $_REQUEST["nome"]; 
    $crm = $_REQUEST["crm"]; 
    $espec = $_REQUEST["especialidade"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"];
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    $sql = "INSERT INTO funcionario (nome, crm, especialidade, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$crm', '$espec', '$data_nasc', '$telefone', '$email','$senha');";  
    mysqli_query($mysqli,$sql);

    header ('location: funcionarios.php');

}

?>