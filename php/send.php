<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit; }

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$msg = trim($_POST['message'] ?? '');
$subject = trim($_POST['subject'] ?? '');

if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$msg) {
  http_response_code(400); echo "Dados inválidos"; exit;
}

$to = "jambad.nascimento@gmail.com";
$subject = $subject;
$headers = "From: $name <$email>\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
$body = "Nome: $name\nEmail: $email\n\nMensagem:\n$msg";

if (mail($to, $subject, $body, $headers)) { echo "OK"; }
else { http_response_code(500); echo "Erro ao enviar"; }