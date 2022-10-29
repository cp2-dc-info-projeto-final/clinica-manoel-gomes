<?php
include "autentica.php";
include "conecta_mysql.inc";

$cadastro= $_REQUEST["servico"];

if ($cadastro == 'servico'){

    $nome = $_REQUEST["nome"]; 
    $desc = $_REQUEST["descricao"]; 
    $tipo_servico = $_REQUEST["tipo_servico"];

    $sql = "SELECT * FROM servicos WHERE nome = '$nome';";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) == 1){
            $_SESSION['msg7'] = "<div class='alert alert-danger'>Serviço já cadastrado!</div>";
            header("Location: perfil.php");
            exit;
        }
    
   
    $sql = "INSERT INTO servicos (nome, descricao, tipo_servico)";
    $sql .= "VALUES ('$nome','$desc', '$tipo_servico');";  
    mysqli_query($mysqli,$sql);

    header ('location: servicos.php');

}
?>