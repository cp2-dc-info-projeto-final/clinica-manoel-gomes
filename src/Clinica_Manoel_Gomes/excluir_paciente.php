<?php 
    $mysqli = mysqli_connect("localhost","admin","123","bdsql");


    $cod_paciente = $_GET["cod_paciente"];
    $sql = "DELETE FROM paciente WHERE cod_paciente = $cod_paciente;"; 
    mysqli_query($mysqli,$sql);

    header('location: clientes.php');

    mysqli_close($mysqli);
?>