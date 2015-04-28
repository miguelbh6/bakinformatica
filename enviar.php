<?php

  // Destinatário
  $para = "administrador@bakinformatica.com.br";

  // Assunto do e-mail
  $assunto = "Contato do site";

  // Campos do formulário de contato
  $nome = $_POST['nome'];
  
  $email = $_POST['email'];
  $mensagem = $_POST['msg'];

  // Monta o corpo da mensagem com os campos
  $corpo = "Nome: $nome";
  $corpo .= "E-mail: $email <br/> Mensagem: $mensagem";
  
  $mensagemHTML = '<p><b><i>'.$mensagem.'</i></b></p><hr>';

  // Cabeçalho do e-mail
  $header = "From: $nome <$para> Reply-to: $email ";
  $header .= "Content-Type: text/html; charset=iso-8859-1 ";
  
  $quebra_linha = "\r\n"; 
  
  /* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $para.$quebra_linha;
$headers .= "Reply-To: " . $email . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

  mail($para, $assunto, $mensagemHTML, $headers);

  $msg = "Sua mensagem foi enviada com sucesso.";

  // Mostra a mensagem acima e redireciona para index.html
  echo "<script>location.href='index.php'; alert('$msg');</script>";

?>