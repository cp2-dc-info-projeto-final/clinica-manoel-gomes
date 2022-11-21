<?php
  include "envia_email.php";

  $nome = "Fulano de Tal";
  $data = "10/11/2022";
  $para = "pedrorodriguesmoralles@gmail.com";

  $assunto = "Exemplo de e-mail pelo PHP";

  $mensagem = "Dados cadastrados <br>";
  $mensagem .= "<br><b>Nome:</b> $nome";
  $mensagem .= "<br><b>Data:</b> $data";
  $mensagem .= "<br><b>E-mail:</b> $para";

  if (envia_email($para, $assunto, $mensagem)){
      echo "E-mail enviado com sucesso!";
  }

?>