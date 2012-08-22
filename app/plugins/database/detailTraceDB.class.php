<?php /*windu.org database*/

class detailTraceDB extends baseDB
{
    public function insert(array $data = array())
    {
		$data['createTime'] = generator::sqlDatetime();
		$data['updateTime'] = generator::sqlDatetime();
		$data['createIP'] = generator::ip();
		$data['updateIP'] = generator::ip();
		$data['createUserAgent'] = $_SERVER['HTTP_USER_AGENT'];
		$data['updateUserAgent'] = $_SERVER['HTTP_USER_AGENT'];
		
    	parent::insert($data);
    }  
    public function update($column, $value = null, $where = null)
    {
		$column['updateTime'] = generator::sqlDatetime();
		$column['updateIP'] = generator::ip();		
		$column['updateUserAgent'] = $_SERVER['HTTP_USER_AGENT'];
		
    	parent::update($column, $value, $where);
    } 
}

?>