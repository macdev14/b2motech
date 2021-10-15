<?php
require_once "./vendor/autoload.php";
//require_once "./vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php";
class email
{
	private static function getDatetimeNow(){
		$tz_object = new DateTimeZone('Brazil/East');
		$datetime = new DateTime();
		$datetime->setTimezone($tz_object);
		return $datetime->format('d-m-Y H:i:sP');
	}
	public static function send($actual_link){
		$subject = $senders_name = $sent_from = $message = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{

			$senders_name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
			$sent_from = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
			$subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
			
        			
		if ($subject == "" || $senders_name == "" || $sent_from == "" || $message == "") {
           $error_message = "&Eacute; necess&aacute;rio preencher os campos";
        }
		if (!preg_match("/^[a-zA-Z ]*$/",$senders_name)) {
  		   $error_message = "Apenas letras e espacos s&atilde;o permitidos!"; 
        }
		if (!filter_var($sent_from, FILTER_VALIDATE_EMAIL)) {
           $error_message = "Formato de e-mail Inv&aacute;lido!"; 
        }
            
        $email_log = ''; 
        $email_log = $email_log . "Subject: " . $subject . "<br />\n";
        $email_log = $email_log . "Name: " . $senders_name . "<br />\n";
        $email_log = $email_log . "Email: " . $sent_from . "<br />\n";
        $email_log = $email_log . "Message: " . $message; 
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->CharSet = 'UTF-8';
		
		$purifier = new HTMLPurifier();
		$message = $purifier->purify(filter_input(INPUT_POST,'message'));
		
		$email_body = "";
		$dirpath = realpath(__DIR__ . '/..');
		$email_body = file_get_contents($dirpath. "/inc/email.html");
		$mail->addEmbeddedImage($dirpath . '/img/logo5.png', 'logo5', 'logo5.png');	
		$email_body = str_replace('%name%',$senders_name,$email_body);
		$email_body = str_replace('%subject%',$subject,$email_body);	
		$email_body = str_replace('%message%',$message,$email_body);		
			
	
		
		$mail->SMTPDebug = 0;
		$mail->isSMTP();
		$mail->Host = "smtp.sendgrid.net";
		$mail->SMTPAuth = true;
		$mail->Username = 'lauropimentel';
		$mail->Password = 'mac_coder2002';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		
		$mail->setFrom($sent_from,$senders_name);
		$mail->addAddress('lauropimentel12@gmail.com', 'Lauro Pimentel');
		$mail->Subject = $subject;
		$mail->msgHTML($email_body);
		$mail->isHTML(true);
		$mail->AltBody = 'Site B2MO - recebemos uma mensagem de '. $senders_name;
		
		if ($mail->send()) {
            file_put_contents('logs/' . self::getDatetimeNow() . '.txt',$email_log);
			
			echo'<script type="text/javascript">
            window.location.replace("'.$actual_link.'");
			alert("Email enviado!");           
			</script>'; 
            //header("Refresh:0");
            exit;
        } else {
            //$error_message = "Mailer Error: " . $mail->ErrorInfo;
			echo'<script type="text/javascript">
            window.location.replace("'.$actual_link.'");
			alert( "Mensagem Não Pôde ser Enviado\n Verifique os Campos");
			</script>';
           // header("Refresh:0");
        }
	}
}
}

?>
