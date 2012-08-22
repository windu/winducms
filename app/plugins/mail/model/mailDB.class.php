<?php
class mailDB extends traceDB
{
	public function add($to,$messageId) {
		$userDB = new usersDB();
		$user = $userDB->fetchRow("email = '{$to}'");
		
		$data['senderId'] = 0;
		$data['recipientId'] = $user->id;
		$data['to'] = $to;
		$data['messageId'] = $messageId;
		
		return $this->insert($data);
	}
	public function getByRecipientId($id, $order = null, $what = '*', $limit = null) {
		return $this->fetchAll("recipientId = {$id}", $order = null, $what = '*', $limit = null);
	}
	public function getBySenderId($id, $order = null, $what = '*', $limit = null) {
		return $this->fetchAll("senderId = {$id}", $order = null, $what = '*', $limit = null);
	}	
}
?>