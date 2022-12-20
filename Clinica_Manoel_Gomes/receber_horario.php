<?php
include "autentica.php";
include "conecta_mysql.inc";

date_default_timezone_set('America/Sao_Paulo');

$cod_servico = $_REQUEST['nome_agendamento'];
$cod_funcionario = $_REQUEST['funcionario_agendamento'];

$sql= "SELECT * FROM funcionario WHERE cod_funcionario = '$cod_funcionario'";
$res= mysqli_query($mysqli,$sql);
$funcionario = mysqli_fetch_array($res);

$tipo_servico = $funcionario['tipo_servico'];

$sql= "SELECT * FROM servicos WHERE cod_servico = '$cod_servico'";
$res= mysqli_query($mysqli,$sql);
$servico = mysqli_fetch_array($res);

$servico_tipo = $servico['tipo_servico'];

$nome_servico = $servico['nome'];
$data = $_REQUEST["data"];
$hora = $_REQUEST["horario"]; 
$responsavel = $funcionario["nome"];
$crm = $funcionario["crm"];
$servico = $_REQUEST["servico"];

if($tipo_servico != $servico){
    $_SESSION['msg1'] = "<div class='alert alert-danger'>Este funcionário não oferece serviços do tipo ".$servico.".</div>";
    header("Location: perfil.php");
    exit;
}

if($tipo_servico != $servico_tipo){
    $_SESSION['msg1'] = "<div class='alert alert-danger'>Este funcionário não oferece o serviço ".$nome_servico.".</div>";
    header("Location: perfil.php");
    exit;
}

$data_atual = date_create()->format('Y-m-d');
$hora_atual = date_create()->format('H:i');
$encerramento = date("17:00");
$inicio = date("06:00");

if($data < $data_atual){
    $_SESSION['msg1'] = "<div class='alert alert-danger'>Data inválida!</div>";
    header("Location: perfil.php");
    exit;
}

if($data == $data_atual){
    if($hora < $hora_atual){
        echo($data);
        echo($data_atual);
        echo($hora);
        echo($hora_atual);
        $_SESSION['msg1'] = "<div class='alert alert-danger'>Hora inválida!</div>";
        header("Location: perfil.php");
        exit;
    }
}

if($hora > $encerramento){
    $_SESSION['msg1'] = "<div class='alert alert-danger'>Hora inválida! O horário de expediente termina ás 17:00.</div>";
    header("Location: perfil.php");
    exit;
}

if($hora < $inicio){
    $_SESSION['msg1'] = "<div class='alert alert-danger'>Hora inválida! O horário de expediente começa ás 06:00.</div>";
    header("Location: perfil.php");
    exit;
}

$sql= "SELECT * FROM agendamento";
$res= mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);

for ($i = 0; $i < $linhas; $i++){
    $agendamento = mysqli_fetch_array ($res);

    if($data == $agendamento['dia']){
        if($hora == $agendamento['horario']){
            if($cod_servico == $agendamento['cod_servico']){
                $_SESSION['msg1'] = "<div class='alert alert-danger'>Data e horário já cadastrados para ".$nome_servico."</div>";
                header("Location: perfil.php");
                exit;
            }

            if ($crm == $agendamento['crm']) {
                $_SESSION['msg1'] = "<div class='alert alert-danger'>Data e horário já cadastrados para ".$responsavel."</div>";
                header("Location: perfil.php");
                exit;
            }
        }
    }
}
    


$sql = "INSERT INTO agendamento (servico, nome_servico, tipo_servico, dia, horario, responsavel, crm, cod_servico)";
$sql .= "VALUES ('$servico','$nome_servico', '$tipo_servico', '$data','$hora','$responsavel', '$crm', '$cod_servico')";

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
    exit;
}

header("Location: calendario_adm.php");

?>