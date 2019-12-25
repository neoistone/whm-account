<?php 
 include_once("class.phpmailer.php");
function Nmail($To,$Subject,$Message){

$Host = 'mail.smtp2go.com';
$Username = 'manikantasripadi@neoistone.com';
$Password = 'N^&*()_+s@1';
$Port = "8025";

$mail = new PHPMailer();
$body = $Message;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
//$mail->SMTPSecure = 'ssl'; //or tsl -> switched off
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom($Username);
$mail->Subject = $Subject;
$mail->MsgHTML($Message);
$mail->AddAddress($To);

if(!$mail->Send()) {
    $mensagemRetorno = 'Error: '. print($mail->ErrorInfo);
} else {
    $mensagemRetorno = 'E-mail sent!';
}
 return $mensagemRetorno;
}
?>