<?php /*windu.org model*/
class usertypesDB extends baseDB
{
	const BUCKET_SYSTEM = 0;
	const BUCKET_PAGE = 1;
	const BUCKET_SHOP = 2;
	
	public $bucket = array(
		 self::BUCKET_SYSTEM => "System",
		 self::BUCKET_PAGE => "Strona",
	);	
	
	public function add($data)
	{
		$this->insert($data);
	}
	//TODO dorobic logike do kasowania powiazan tak zeby wywalal cale drzewko a nei tylko jedno powiazanie
	public function deleteUserType($id) {
		$type = $this->fetchRow("id = '{$id}'");
		$usersDB = new usersDB();
		
		if($type->extends!=0){
			$usersDB->update('type', $type->extends, "type = '{$id}'");
		}else{
			$usersDB->update('type', $type->extends, "type = '{$id}'");
		}
		$this->update('extends', $type->extends,"extends = '{$id}'");
		$this->deleteRows("id = '{$id}'");
	}	
	public function getByBucket($bucketId,$order = null,$returnIds = false,$coma = false,$arrayByName = false) {
		$types = $this->fetchAll("bucket='{$bucketId}'",$order);
		if($returnIds or $arrayByName){
			foreach ($types as $type){
				if($coma){
					$typeIds .= $type->id.',';
				}elseif($arrayByName){
					$typeIds[$type->id] = $type->name;
				}else{
					$typeIds[] = $type->id;
				}
			}
			if($coma){$typeIds=rtrim($typeIds,',');}
			return $typeIds;
		}else{
			return $types;
		}
	}
	public function getArray($where = null,$order = null) {
		$types = $this->fetchAll($where,$order);
		$typeArray[0] = 'Brak';
		foreach ($types as $type){
			$typeArray[$type->id] = $type->name;
		}
		return $typeArray;
	}
	public function getDependentRegexp($parentId) {
		
		$parent = $this->fetchRow("id = {$parentId}");
		$all[] = $parent->regexp;

		while ($parent->extends != 0) {
			$parent = $this->fetchRow("id = {$parent->extends}");
			$all[]=$parent->regexp;
			if($parent->extends == $parentId) break;
		}
		return $all;
	}

	public function havePromission($user,$className) {
		$regexps = $this->getDependentRegexp($user->type);
		foreach ($regexps as $regex) {
			$regexps = explode(',', $regex);
			foreach ($regexps as $reg){
				if(preg_match('/'.$reg.'/', $className)){return true;}
			}
			
		}
		//exit;
		return false;
	}

}
?>