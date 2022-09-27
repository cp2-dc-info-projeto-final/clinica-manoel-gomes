<?php  include "conecta_mysql.inc"; ?>
<?php

$cadastro= $_REQUEST["cad"];

if ($cadastro == 'paciente'){

    $nome = $_REQUEST["nome"]; 
    $cpf = $_REQUEST["cpf"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

   
    $sql = "INSERT INTO paciente (nome, cpf, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$cpf','$data_nasc','$telefone','$email','$senha');";  
    mysqli_query($mysqli,$sql);

    header ('location: index.html');

}

?>
