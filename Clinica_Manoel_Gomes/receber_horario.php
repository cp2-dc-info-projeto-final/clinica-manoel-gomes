<?php
include "autentica.php";
include "conecta_mysql.inc";

$cod_servico = $_REQUEST['nome_agendamento'];
$cod_funcionario = $_REQUEST['funcionario_agendamento'];

$sql= "SELECT * FROM funcionario WHERE cod_funcionario = '$cod_funcionario';";
$res= mysqli_query($mysqli,$sql);
$funcionario = mysqli_fetch_array($res);

$sql= "SELECT * FROM servicos WHERE cod_servico = '$cod_servico';";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);

for ($i = 0; $i < $linhas; $i++){
    $servico = mysqli_fetch_array($res);
}

$nome_servico = $servico['nome'];
$data = $_REQUEST["data"]; 
$hora = utf8_decode($_REQUEST["horario"]); 
$responsavel = $funcionario["nome"];
$crm = $funcionario["crm"];
$servico = $_REQUEST["servico"];

$sql = "INSERT INTO agendamento (servico, nome_servico, dia, horario, responsavel, crm, cod_servico)";
$sql .= "VALUES ('$servico','$nome_servico','$data','$hora','$responsavel', '$crm', '$cod_servico')";

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

header("Location: perfil.php");

?>