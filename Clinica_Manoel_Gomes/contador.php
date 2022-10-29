<?php
    session_start();
    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 1;
    }
    else{
        $_SESSION["contador"]++;
    }
    echo "Contador: ".$_SESSION["contador"];
?>