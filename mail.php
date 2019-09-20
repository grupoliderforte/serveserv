<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
echo "Nome não pode estar vazio";
die();
}
if ($email === ''){
echo "Email não pode estar vazio";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Formato inválido de email.";
die();
}
}
if ($subject === ''){
echo "Assunto não pode estar vazio";
die();
}
if ($message === ''){
echo "Messagem não pode estar vazia";
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "contato@serveserv.com.br";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email enviado!";
?>