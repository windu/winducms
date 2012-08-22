<?php /*windu.org model*/
class configDB extends baseDB
{
	const CONFIG_BUCKET_OTHER = 0;
	const CONFIG_BUCKET_CONTENT = 1;
	const CONFIG_BUCKET_USERS = 2;
	const CONFIG_BUCKET_THEMES = 3;
	const CONFIG_BUCKET_TOOLS = 4;
	const CONFIG_BUCKET_SYSTEM = 5;
	
	public $bucketNames= array(
		 self::CONFIG_BUCKET_OTHER => "model.configdb.controller.general",
		 self::CONFIG_BUCKET_CONTENT => "model.configdb.controller.content",
		 self::CONFIG_BUCKET_USERS => "model.configdb.controller.users",
		 self::CONFIG_BUCKET_THEMES => "model.configdb.controller.gfx",
		 self::CONFIG_BUCKET_TOOLS => "model.configdb.controller.tools",
		 self::CONFIG_BUCKET_SYSTEM => "model.configdb.controller.system"
	);	
	public function getByGroup($group) {
		return $this->fetchAll("bucket = {$group}");
	}
	public function getByName($name) {
		return $this->fetchRow("name = '{$name}'");
	}
	public function add($data) {
		return $this->insert($data);
	}
    public function insert(array $data = array())
    {
		if($data['nodelete']==null){
			$data['nodelete'] = 1;
		}
    	parent::insert($data);
    }  
}
?>
