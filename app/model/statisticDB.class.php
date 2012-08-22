<?php /*windu.org model*/
class statisticDB extends baseDB
{
    public function insert($views)
    {
    	$time = date('Y-m-d',strtotime('now'));
		$data['date'] = $time;
		$data['views'] = $views;
    	parent::insert($data);
    } 
	public function addView(){
		$time = date('Y-m-d',strtotime('now'));
		$views = $this->fetchRow("date = '{$time}'");
		if($views == null){
			$this->insert(1);
		} else {
			$this->updateRow(array('views'=>$views->views+1), "date = '{$time}'");
		}
	}  
}
?>