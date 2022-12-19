<?php 
include "autentica.php";
include "conecta_mysql.inc";

$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_admin = $_REQUEST["cod_admin"];
    $nome = $_REQUEST["nome"]; 
    $user = $_REQUEST["username"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $telefone = $_REQUEST["telefone"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"];
    
    $sql = "SELECT * FROM administrador WHERE cod_admin != '$cod_admin'";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro_email = 0;
    $erro_tel = 0;
    $erro_user = 0;
    $cont = 0;

    for($i=0; $i < $linhas; $i++){
        $resultado = mysqli_fetch_array($res);
        
        if($resultado['email'] == $email){ 
            $erro_email = 1;
            $cont ++;
        }
        if($resultado['telefone'] == $telefone){
            $erro_tel = 1;
            $cont ++;
        }
        if($resultado['username'] == $user){
            $erro_user = 1;
            $cont ++;
        }
        if($cont == 3){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>E-mail, telefone e nome de usuário já cadastrados</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_user == 1)){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>E-mail e nome de usuário já cadastrados</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_user == 1)){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>Telefone e nome de usuário já cadastrados</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
        elseif($erro_user == 1){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>Nome de usuário já cadastrado</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['msg2'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";

            $_SESSION['cod_admin'] = $cod_admin;

            header("Location: altera_adm.php");
            exit;
        }
    }

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "UPDATE administrador SET nome = '$nome', username = '$user',  data_nasc = '$data_nasc', telefone = '$telefone', email = '$email', senha = '$senha_cript'";
    $sql .= "WHERE cod_admin = $cod_admin;";  
    mysqli_query($mysqli,$sql);
        
    header('location: adm.php');

    session_destroy(['cod_admin']);
}

?>