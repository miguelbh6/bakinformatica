<?php

  // Destinatário
  $para = "miguelbh6@gmail.com";

  // Assunto do e-mail
  $assunto = "BAK INFORMATICA - Contato do site";

  // Campos do formulário de contato
  $nome = $_POST['name'];
  
  $email = $_POST['email'];
  $mensagem = $_POST['message'];

  // Monta o corpo da mensagem com os campos
  
  $corpo .= "Nome: $nome<br /><br /> E-mail: $email <br /><br /> Mensagem: $mensagem";
  
  

  $quebra_linha = "\r\n"; 
  
  /* Montando o cabeÃ§alho da mensagem */
$header = "MIME-Version: 1.1" .$quebra_linha;
$header .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$header .= "From: " . $para.$quebra_linha;
$header .= "Reply-To: " . $email . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

  mail($para, $assunto, $corpo, $header);

  $msg = "Sua mensagem foi enviada com sucesso.";

  // Mostra a mensagem acima e redireciona para index.html
  echo "<script>location.href='../index.php'; alert('$msg');</script>";

?>