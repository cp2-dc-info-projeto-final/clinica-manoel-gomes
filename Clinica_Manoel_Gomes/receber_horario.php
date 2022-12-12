<?php
include "conecta_mysql.inc";

$nome = $_REQUEST["nome"]; 
$data = $_REQUEST["data"]; 
$hora = $_REQUEST["horario"]; 
$profissional = $_REQUEST["profissional"]; 
$servico = $_REQUEST["tipo_servico"];

$sql = "INSERT INTO agendamento (servico, nome, dia, horario, profissional)";
$sql .= "VALUES ('$servico', '$nome', '$data', '$hora', '$profissional');";  
mysqli_query($mysqli,$sql);

header ('location: perfil.php');

?>