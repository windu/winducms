<?php
class imagesDB extends ekeyDB
{
	public function getByEkey($ekey){
		return $this->fetchRow("ekey='{$ekey}'");
	}
	public function getByBucket($bucketId,$order = 'position ASC',$what = '*', $limit = null) {
		return $this->fetchAll("bucket='{$bucketId}'",$order, $what, $limit);
	}
	public function getFirstByBucket($bucketId,$order = 'position ASC',$what = '*') {
		return $this->fetchRow("bucket='{$bucketId}'",$order, $what);
	}	
	public function insert(array $data = array())
	{
		$data['position'] = 999999;
		parent::insert($data);
	}
}
?>