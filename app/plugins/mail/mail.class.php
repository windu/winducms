<?php  /*windu.org mail*/
class mail extends mailBase
{	
	public static function send($to,
								$subject,
								$message,
								$senderName = EMAIL_NAME,
								$from = EMAIL_NOREPLAY,
								$replay = EMAIL_NOREPLAY,
								$return = EMAIL_NOREPLAY,
								$additional_parameters = null){
		mail::sendMail($to, $subject, $message, $senderName, $from, $replay, $return, $additional_parameters);
	}
}
?>