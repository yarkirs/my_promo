<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 //Login
$mail->Password = '';                    //Pass        
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('ar_yarl27@bk.ru', $name);   // From
$mail->addAddress('yarkirs27@gmail.com');     // Add a recipient

$mail->isHTML(true);                                

$mail->Subject = 'Заявка с Визитки!';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Имя: ' . $name . ' <br>
	Телефон: ' . $phone . '<br>
	Заявка принята!';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>