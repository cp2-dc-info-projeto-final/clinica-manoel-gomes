<?php
include "autentica.php";
include "conecta_mysql.inc";

$cod_agendamento = $_REQUEST['cod_agendamento'];

$sql = "UPDATE agendamento SET cod_paciente = NULL, nome_paciente = NULL WHERE cod_agendamento = '$cod_agendamento'"; 
mysqli_query($mysqli,$sql);

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

header ("location: calendario_adm.php");

?>