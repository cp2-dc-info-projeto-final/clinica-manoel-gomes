<?php
include "autentica_paciente.php";
include "conecta_mysql.inc";

$cod_agendamento = $_SESSION['cod_agendamento'];
$cod_paciente = $_REQUEST["cod_paciente"];

$sql= "SELECT * FROM paciente WHERE cod_paciente = '$cod_paciente';";
$res= mysqli_query($mysqli,$sql);
$paciente = mysqli_fetch_array($res);
$nome_paciente = $paciente['nome'];

$sql = "UPDATE agendamento SET cod_paciente = '$cod_paciente', nome_paciente = '$nome_paciente'";
$sql .= "WHERE cod_agendamento = '$cod_agendamento'";  
mysqli_query($mysqli,$sql);

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

header("Location: calendario_paciente.php");


?>