<?php
include "conecta_mysql.inc";

$nome = utf8_decode($_REQUEST["nome"]); 
$data = $_REQUEST["data"]; 
$hora = utf8_decode($_REQUEST["horario"]); 
$crm = $_REQUEST["crm"]; 
$servico = $_REQUEST["servico"];

$sql = "INSERT INTO agendamento (servico, nome, dia, horario, crm)";
$sql .= "VALUES ('$servico','$nome','$data','$hora','$crm')"; 

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

header ('location: perfil.php');


?>