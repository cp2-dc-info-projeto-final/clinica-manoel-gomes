<?php 
    
    include "autentica.php";
    include "conecta_mysql.inc";


    $cod_funcionario = $_REQUEST["cod_funcionario"];
    $sql = "DELETE FROM funcionario WHERE cod_funcionario = $cod_funcionario;"; 
    mysqli_query($mysqli,$sql);

    header('location: funcionarios.php');

    mysqli_close($mysqli);
?>