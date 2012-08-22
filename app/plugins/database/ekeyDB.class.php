<?php /*windu.org database*/

class ekeyDB extends traceDB
{
	public function insert(array $data = array())
    {
		$data['ekey'] = generator::ekey($this);
    	parent::insert($data);
    }
}

?>
