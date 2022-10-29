<?php

    include "autentica.php";
    include "conecta_mysql.inc";



    $cod_admin = $_REQUEST["cod_admin"];
    $sql = "DELETE FROM administrador WHERE cod_admin = $cod_admin;"; 
    mysqli_query($mysqli,$sql);

    header('location: adm.php');

    mysqli_close($mysqli);
?>