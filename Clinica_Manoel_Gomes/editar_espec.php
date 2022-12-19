<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_espec = $_REQUEST["cod_especialidade"];
    $espec = $_REQUEST["especialidade"]; 
    
    $sql = "SELECT * FROM especialidade WHERE cod_especialidade != '$cod_espec'";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro = 0;

    for($i=0; $i < $linhas; $i++){
        $resultado = mysqli_fetch_array($res);
        
        if($resultado['especialidade'] == $espec){ 
            $erro = 1;
        }
        if($erro == 1){
            $_SESSION['msg_especialidade'] = "<div class='alert alert-danger'>Especialidade já cadastrada</div>";

            $_SESSION['cod_especialidade'] = $cod_espec;

            header("Location: altera_espec.php");
            exit;
        }
    }

    $sql = "UPDATE especialidade SET especialidade = '$espec'";
    $sql .= "WHERE cod_especialidade = $cod_espec;";
    mysqli_query($mysqli,$sql);
        
    header('location: espec.php');

    session_destroy(['cod_especialidade']);
}

?>