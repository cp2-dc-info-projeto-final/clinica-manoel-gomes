<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";

$cod_agendamento = $_REQUEST['cod_agendamento'];

$sql = "UPDATE agendamento SET cod_paciente = NULL WHERE cod_agendamento = $cod_agendamento"; 
mysqli_query($mysqli,$sql);

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

header ('lcoation: calendario_paciente.php');

?>