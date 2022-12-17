<?php
include "autentica.php";
include "conecta_mysql.inc";

$cod_servico = $_SESSION['servico_cod'];

$nome = utf8_decode($_SESSION['servico_nome']);
$data = $_REQUEST["data"]; 
$hora = utf8_decode($_REQUEST["horario"]); 
$crm = $_REQUEST["crm"]; 
$servico = $_REQUEST["servico"];

$sql = "INSERT INTO agendamento (servico, nome, dia, horario, crm, cod_servico)";
$sql .= "VALUES ('$servico','$nome','$data','$hora','$crm','$cod_servico')";

echo $cod_servico;
echo $nome;

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

if(empty($_SESSION['servico_cod'])){
    session_destroy('servico_cod');
}
if(empty($_SESSION['servico_nome'])){
    session_destroy('servico_nome');
}

//header("Location: perfil.php");*/

?>