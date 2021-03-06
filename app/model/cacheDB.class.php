<?php /*windu.org model*/
class cacheDB extends baseDB
{
    public function insert(array $data = array())
    {
		$data['updateTime'] = generator::sqlDatetime();
    	parent::insert($data);
    }  
    public function updateRow($data, $where = null)
    {
		$data['updateTime'] = generator::sqlDatetime();
    	parent::updateRow($data, $where);
    }
    public function read($name) {
    	return $this->fetchRow("name = '{$name}'")->data;
    } 
    public function write($name,$data,$bucket,$serialized = 0) {
    	$row = $this->fetchRow("name = '{$name}'");
    	
    	if (is_object($row)) {
    		return $this->updateRow(array("data"=>$data,"serialized"=>$serialized),"id = {$row->id}");
    	}else{
    		return $this->insert(array("data"=>$data,"name"=>$name,"bucket"=>$bucket,"serialized"=>$serialized));
    	}
    }     
}
?>
