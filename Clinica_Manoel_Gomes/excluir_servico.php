<?php 
    
    include "autentica.php";
    include "conecta_mysql.inc";


    $cod_servico = $_REQUEST["cod_servico"];
    $sql = "DELETE FROM servicos WHERE cod_servico = $cod_servico;"; 
    mysqli_query($mysqli,$sql);

    header('location: servicos.php');

    mysqli_close($mysqli);
?>