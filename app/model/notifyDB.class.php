<?php /*windu.org model*/
class notifyDB extends baseDB
{
	public static function add($data,$priority)
	{
		$dataFinal['content'] = $data;
		$dataFinal['insertTime'] = generator::sqlDatetime();
		$dataFinal['updateTime'] = generator::sqlDatetime();
		$dataFinal['closed'] = 0;
		$dataFinal['priority'] = $priority;
		
		$notifyDB = new notifyDB();
		
		if ($notifyDB->fetchCount("content = '".$dataFinal['content']."'")>=1) {
			unset($dataFinal['insertTime']);
			unset($dataFinal['updateTime']);
			$notifyDB->updateRow($dataFinal,"content = '".$dataFinal['content']."'");
		}else{
			$notifyDB->insert($dataFinal);
		}
	}
	public function close($id)
	{
		$this->updateRow(array('closed' => 1),"id = {$id}");
	}	
	public function updateRow($data, $where = null) {
		$data['updateTime'] = generator::sqlDatetime();
		parent::updateRow($data, $where);
	}
	public static function count() {
		$notifyDB = new notifyDB();
		return $notifyDB->fetchCount('closed=0');
	}
}
?>