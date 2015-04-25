<?php
$email_remetente = "miguelbh6@gmail.com";
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $email_remetente\r\n"; // remetente
$headers .= "Return-Path: $email_remetente\r\n"; // return-path
$headers .= "Reply-To: miguelbh6@gmail.com\r\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
$envio = mail("miguelbh6@gmail.com", "Assunto", "Mensagem", $headers, "-f$email_remetente");

ini_set("error_reporting",E_ALL);

echo $envio;
?>