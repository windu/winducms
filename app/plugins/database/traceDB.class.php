<?php /*windu.org database*/

class traceDB extends baseDB
{
    public function insert(array $data = array())
    {
		$data['createTime'] = generator::sqlDatetime();
		$data['updateTime'] = generator::sqlDatetime();
		$data['createIP'] = generator::ip();
		$data['updateIP'] = generator::ip();
		
    	parent::insert($data);
    }  
    public function updateRow($data, $where = null)
    {
		$data['updateTime'] = generator::sqlDatetime();
		$data['updateIP'] = generator::ip();		
		
    	parent::updateRow($data, $where);
    } 
}

?>
