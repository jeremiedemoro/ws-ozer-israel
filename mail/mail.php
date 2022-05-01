<?
$name = $_POST{'name'};
$number = $_POST{'number'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Nom: ".$name."
Numero: ".$number."
Email: ".$email."
Message: ".$message."

";

mail ("contact@ozer-israel.com" , "Nouveau Message Formulaire Ozer Israel", $email_message);
header("location: ../mail-success.html ");
?>


