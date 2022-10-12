<?php 
    
    include "autentica.php";
    include "conecta_mysql.inc";


    $cod_espec = $_REQUEST["cod_especialidade"];
    $sql = "DELETE FROM especialidade WHERE cod_especialidade = $cod_espec;"; 
    mysqli_query($mysqli,$sql);

    header('location: espec.php');

    mysqli_close($mysqli);
?>