<?php /*windu.org model*/
class logDB extends baseDB
{
	const BUCKET_404 = 1;
	const BUCKET_LOGIN_SUCCESS = 2;
	const BUCKET_LOGIN_ERROR = 3;
		
	public function add($bucket,$data)
	{
		$data['bucket'] = $bucket; 
		$this->insert($data);
		return $returnData;
	}
    public function insert(array $data = array())
    {
		$data['createTime'] = generator::sqlDatetime();
		$data['createIP'] = generator::ip();
    	parent::insert($data);
    } 
   	public function clean($date){
   		$date = generator::sqlDatetime($date);
   		$this->deleteRows("createTime <= '{$date}'");
   	}
}
?>