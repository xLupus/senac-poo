<?php

require_once("classes/src/PHPMailer.php");
require_once("classes/src/SMTP.php");
require_once("classes/src/Exception.php");

// ** Ativacao das classes para uso **
use PHPMailer\PHPMailer\PHPMailer; // habilita username da phpmailer
use PHPMailer\PHPMailer\Exception; // habilita username da Exception
use PHPMailer\PHPMailer\SMTP;      // habilita username da Exception

error_reporting (1);

$mail = new PHPMailer(true);


$mail->isSMTP();                                          // definimos o protocolo de envio SMTP
$mail->SMTPAuth   = true;                                 // habilitamos a autenticação
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          // Option for Enable implicit TLS encryptio


//Usado para Autenticar o envio

$mail->Host       = 'smtp.hostinger.com';                 // o SMTP do seu dominio de email deverá ser habilitado na máquina/servidor de envio
$mail->Username   = 'temporario@topsecuritty.com';        // email do servidor valido
$mail->Password   = '@#Els2556';                          // senha do email utilizado do servidor
$mail->Port       = 465;                                  // porta de autenticação do servidor no caso é do gmail


if ( isset($_POST['enviar']) ) {
  $destinatario   = $_POST['destinatario'];
  $assunto        = $_POST['assunto'];
  $conteudo       = $_POST['conteudo'];

  $mail->isHTML(true);                                    // habilita o uso do HTML

  $mail->setFrom('temporario@topsecuritty.com');          // email do remetente
  // $mail->addReplyTo ($remetente);                      // um email de respostas
  $mail->addAddress($destinatario, 'Fulano de Tal');      // email do destinatario
  //$mail->addAddress('email@email.com.br', 'Contato'’);  // mais destinatarios


  $mail->Subject = $assunto; // assunto do email
  $mail->Body = '<strong>'. $conteudo . '</strong>'; // conteúdo da mensagem em html
  $mail->AltBody = 'Texto sem HTML ou link';// No caso da máquina cliente não suportar HTML

  //$mail->addAttachment('/tmp/image.jpg', 'nome.jpg'); // Possivel arquivo anexado
  //$mail->addCC('email@email.com.br', 'Cópia');          // email copiado
  //$mail->addBCC('email@email.com.br', 'Cópia Oculta')   // email copiado ocultamente
}
