<?php /*windu.org mail*/
class mailBase
{
	public static function sendMail($to, $subject, $message, $name, $from, $replay, $return, $parameters){
		$messageId = generator::ekey('mailDB','messageId',32,3);
		$mailDB = new mailDB();
		$mailDB->add($to,$messageId);
		
		$mail = new PHPMailer();
		//$mail->IsSendmail();
		$mail->CharSet = 'utf-8';
		$mail->IsMail();

		$mail->AddReplyTo($replay, config::get('pageName'));
		$mail->AddAddress($to, $name);
		$mail->SetFrom($from, config::get('pageName'));
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		
		if(!$mail->Send()) {
			notifyDB::add('Mailer error: ' . $mail->ErrorInfo, 99);
		}		
		
		return true;
	}
}
?>