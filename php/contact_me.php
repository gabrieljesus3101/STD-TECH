<?php

// Verifique se há campos vazios
if(empty($_POST['name'])  		||
   empty($_POST['Email']) 		||
   empty($_POST['mensagem'])	||
   !filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['Email'];
$message = $_POST['mensagem'];
	

// Crie o e-mail e envie a mensagem
$to = 'gabriel_belval@hotmail.com'; // Adicione seu endereço de e-mail entre '' substituindo seunome@seudomínio.com - É para onde o formulário enviará uma mensagem.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$mensagem";
$headers = "From: noreply@yourdomain.com\n";

// Este é o endereço de e-mail de onde virá a mensagem gerada. Recomendamos usar algo como noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>