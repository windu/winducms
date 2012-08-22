<?php /*windu.org database*/

class baseDB extends sqliteDB
{
	public $tab = NULL;
	
	function __construct()
	{
		$this->tab = str_replace('db', '', strtolower(get_class($this)));
		$this->db = parent::getInstance();
	}	
	
	public function select($where = null, $order = null, $what = '*',$limit = null, $groupby = null)
	{
		if ($where!=null){$where='WHERE '.$where;}
		if ($order!=null){$order='ORDER BY '.$order;}
		if ($limit!=null){$limit='LIMIT '.$limit;}
		if ($groupby!=null){$groupby='GROUP BY '.$groupby;}
		
		$sql = "SELECT $what FROM $this->tab $where $order $limit $groupby";
		return $this->db->query($sql);
	}
    public function insert(array $data = array())
    {
		$keys='';
		$values='';
		
    	foreach ($data as $row)
		{
			if (is_array($row))
			{
				$keys=''; $values='';
				foreach($row as $key=>$val)
				{
					$val = str_replace("'", "&#39;", $val);
					$keys.='`'.$key.'`,';
					$values.="'".$val."',";
				}
				$values=rtrim($values, ',');
				$keys=rtrim($keys, ',');
				
				$sql = "INSERT INTO $this->tab($keys) VALUES ($values)";
				$this->db->exec($sql);
			}
			else
			{
				foreach($data as $key=>$val)
				{
					$val = str_replace("'", "&#39;", $val);
					$keys.='`'.$key.'`,';
					$values.="'".$val."',";
				}
				$values=rtrim($values, ',');
				$keys=rtrim($keys, ',');
								
				$sql = "INSERT INTO $this->tab($keys) VALUES ($values)";
				$this->db->exec($sql);	
				break;			
			}
			
		}
    }  
    public function update($column, $value, $where)
    {
    	$value = str_replace("'", "&#39;", $value);
   		$where='WHERE '.$where;
		$sql = "UPDATE {$this->tab} SET {$column}='{$value}' {$where}";
		$this->db->exec($sql);	
    } 
    public function updateRow($data,$where)
    {
    	$sql = "UPDATE {$this->tab} SET ";
    	
		foreach ($data as $key => $val)
		{
			$val = str_replace("'", "&#39;", $val);
			$sql .= "`$key`='$val', ";
		}
		
		$sql = rtrim($sql,', ');	
		$sql .= ' WHERE '.$where.';';
		
		$this->db->exec($sql);	
    }     
    public function deleteRows($where)
    {
   		$where='WHERE '.$where;
		$sql = "DELETE FROM $this->tab $where";
		$this->db->exec($sql);	
    }  
    public function delete($id) {
    	return $this->deleteRows("id={$id}");
    }
    //Jak feczuje to moge ogarnac to tak zeby byl obiekt na koniec obiekt row ktory ma metody dla rowa bardzo wygodne :)
    public function fetchRow($where = null, $order = null, $what = '*') {
    	return $this->select($where, $order, $what, $limit = 1)->fetch(PDO::FETCH_OBJ);
    }
    public function fetchAll($where = null, $order = null, $what = '*', $limit = null) {
    	return $this->select($where, $order, $what, $limit)->fetchAll(PDO::FETCH_OBJ);
    }   
    public function fetchCount($where = null) {
		if ($where!=null){$where='WHERE '.$where;}
		$sql = "SELECT count(*) FROM $this->tab $where";
		return $this->db->query($sql)->fetchColumn();
    }
    public function fetchCountGroup($groupBy,$where = null,$order = null,$what = '*', $limit = null) {
    	if ($where!=null){$where='WHERE '.$where;}
		if ($order!=null){$order='ORDER BY '.$order;}else{$order="ORDER BY COUNT($groupBy) DESC";}
		if ($limit!=null){$limit='LIMIT '.$limit;}

		$sql = "SELECT *, COUNT($groupBy) FROM {$this->tab} $where GROUP BY {$groupBy} $order $limit";
		return $this->db->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }    
    public function fetchGroup($groupBy, $where = null, $order = null, $what = '*', $limit = null) {
       	$groups = $this->select($where, $order, $groupBy, null, $groupBy)->fetchAll(PDO::FETCH_OBJ);
    	if ($where!=null){$where=$where.' AND ';}
    	foreach ($groups as $group) {
    		$rows = $this->select($where."{$groupBy} = '{$group->$groupBy}'", $order, $what, $limit)->fetchAll(PDO::FETCH_OBJ);
    		if($rows!=null){
    			$data[$group->$groupBy] = $rows;
    		}
    		$rows = null;
    	}
    	return $data;
    }    
    public function set($id,$column,$value) {
    	return $this->update($column,$value,"id={$id}");
    }
    public function get($id,$column) {
    	return $this->select("id={$id}", null, $column, 1)->fetch(PDO::FETCH_OBJ)->$column;
    }
    public function databaseSize() {
    	echo $this->db; exit;
		$sql = "SHOW TABLE STATUS FROM {$this->db}";
		return $this->db->query($sql);
    }  
    public static function executeSql($sql) {
    	$instance = parent::getInstance();
    	return $instance->query($sql);
    } 
}

?>
