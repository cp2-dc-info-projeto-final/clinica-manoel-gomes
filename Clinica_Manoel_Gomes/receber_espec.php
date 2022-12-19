<?php
include "autentica.php";
include "conecta_mysql.inc";

$cad_espec= $_REQUEST["operacao"];

if ($cad_espec == 'cad_espec'){

    $espec = $_REQUEST["especialidade"];

    $sql = "SELECT * FROM especialidade WHERE especialidade = '$espec'";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) == 1){
            $_SESSION['msg6'] = "<div class='alert alert-danger'>Especialidade já cadastrada!</div>";
            header("Location: espec.php");
            exit;
        }

    $sql = "INSERT INTO especialidade (especialidade)";
    $sql .= "VALUES ('$espec');";  
    mysqli_query($mysqli,$sql);

    header ('location: espec.php');

}

?>