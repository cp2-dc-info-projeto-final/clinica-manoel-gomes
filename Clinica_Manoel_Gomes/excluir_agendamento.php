<?php 
    
    include "autentica.php";
    include "conecta_mysql.inc";


    $cod_agendamento = $_REQUEST["cod_agendamento"];
    $sql = "DELETE FROM agendamento WHERE cod_agendamento = $cod_agendamento;"; 
    mysqli_query($mysqli,$sql);

    header('location: calendario_adm.php');

    mysqli_close($mysqli);
?>