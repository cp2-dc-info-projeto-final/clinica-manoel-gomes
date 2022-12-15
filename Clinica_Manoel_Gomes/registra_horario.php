<?php
include "conecta_mysql.inc";

$cod_agendamento = $_REQUEST["cod_agendamento"]; 
$cod_paciente = $_REQUEST["cod_paciente"]; 

$sql = "UPDATE agendamento SET cod_paciente = '$cod_paciente'";
$sql .= "WHERE cod_agendamento = '$cod_agendamento'";  
mysqli_query($mysqli,$sql);

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}


?>