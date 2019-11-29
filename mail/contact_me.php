<?php
if($_POST){
	function getCaptcha($SecretKey){
		$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify=6Lc-98QUAAAAAPkcp5JSRVFh1qT3Q4UlSRtCMuRk&response={$SecretKey}");
		$Return = json_decode($Response);
		return $Return;
	}
	$Return = getCaptcha($_POST['g-recaptcha-response']);

	if ($Return->success == true && $Return->success->score > 0.5) {
		echo "Success!";
	}else{
		echo "You are a Robot!";
	}
}

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'dev@viladosite.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato pelo Site:  $name";
$email_body = "Você recebeu uma nova mensagem do formulário de contato do site.\n\n"."Detalhes da mensagem:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "From: noreply@viladosite.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
$headers .= "Content-Type: text/html; charset=utf-8\n";  
mail($to,$email_subject,$email_body,$headers);
return true;         
?>