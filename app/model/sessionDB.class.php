<?php /*windu.org model*/
class sessionDB extends baseDB
{
	//expire as string
	public function set($data,$expire)
	{
		$dataFinal['dataKey'] = generator::ekey('sessionDB','dataKey',32,3);
		$dataFinal['data'] = $data;
		$dataFinal['expire'] = generator::sqlDatetime(time()+$expire);

		$insertedData = $this->insert($dataFinal);
		return $dataFinal['dataKey'];
	}
	public function clean($date)
	{
		$now = generator::sqlDatetime();
		$this->deleteRows("expire < '{$now}'");
	}
	public function get($dataKey) {
		$now = generator::sqlDatetime();

		$data = $this->fetchRow("dataKey = '{$dataKey}' AND expire > '{$now}'");
		return $data->data;
	}	
}
?>