<?php /*windu.org core*/
class validator
{
	function required($value,$params = null)
	{
		if(is_array($value))
		{
			if ($value['name']=='' or $value['size']==0)
			{
				return TRUE; 
			}
			else
			{
				return FALSE;
			}			
		}
		else
		{
			if ($value=='')
			{
				return TRUE; 
			}
			else if (isset($params['forbiddenVal']))
			{
				if ($value==$params['forbiddenVal']) return TRUE; else return FALSE;
			}
			else
			{
				return FALSE;
			}
		}
	}
	function email($value, $params = null, &$data)
	{
		if (!$this->required($value))
		{
			$val1=explode('@',$value);
			$val2=explode('.',$value);
			if (!isset($val1[1])){$val1[1]='';}
			if (!isset($val2[1])){$val2[1]='';}
			
			if ((strlen($val1[0])>=2) and (strlen($val1[1])>=3) and (strlen($val2[1])>=1))
			{return FALSE;} else {return TRUE;}
		}
	}
	function string($value,$params, &$data)
	{
		if (!$this->required($value))
		{			
			$lenght_min=$params[0];
			$lenght_max=$params[1];
			if (($lenght_max==NULL or strlen($value)<=$lenght_max) and ($lenght_min==NULL or strlen($value)>=$lenght_min))
			{return FALSE;} else {return TRUE;}
		}
	}
	function number($value,$params,&$data)
	{
		if (!$this->required($value))
		{			
			$min=$params[0];
			$max=$params[1];
			
			if (is_numeric($value) and ($max==NULL or $value<=$max) and ($min==NULL or $value>=$min))
			{return FALSE;} else {return TRUE;}
		}
	}
	function unique($value,$params,&$data,$fieldName)//w table podajemy uchwyt do tabeli z ktorej bedizemy czytac dane
	{	
		$table = $params['table'];
		$where = $params['where'];	
		if (!$this->required($value))
		{			
			if($where!=null){$where = ' and '.$where;}
			$val=$table->select("$fieldName='$value' $where",null,$fieldName)->fetch();
			if (!is_array($val))
			{return FALSE;} else {return TRUE;}
		}
	}	
	function exist($value,$params,&$data,$fieldName)//w table podajemy uchwyt do tabeli z ktorej bedizemy czytac dane
	{
		$table = $params['table'];
		if (!$this->required($value))
		{			
			$val=$table->select("$fieldName='$value'",null,$fieldName)->fetch();
			if (!is_array($val))
			{return TRUE;} else {return FALSE;}
		}
	}	
	function same($value,$params,&$data) //w parametrze podajemy pole z ktorym funkcja porowna wartosc $value
	{
		if (!$this->required($value))
		{			
			if ($value!=$data[$params])
			{return TRUE;} else {return FALSE;}
		}
	}

	function fileSize($value,$params,&$data,$fieldName)
	{
		if(is_array($_FILES[$fieldName]))
		{
			$min=$params[0];
			$max=$params[1];
			
			if ($_FILES[$fieldName]['size']<$min or $_FILES[$fieldName]['size']>$max)
			{
				return TRUE; 
			}
			else
			{
				return FALSE;
			}			
		}
	}
	function fileType($value,$params,&$data,$fieldName)
	{
		if(is_array($_FILES[$fieldName]))
		{
			foreach ($params as $ext)
			{
				if(strlen($ext)==2){
					$extPom = substr($_FILES[$fieldName]['name'], -3, 3);
				}else{
					$extPom = substr($_FILES[$fieldName]['name'], -4, 4);
				}		
				
				$extPom = strtolower($extPom);
				$extPom = str_replace('.','',$extPom);	
				
				if ($ext == $extPom)
				{
					$find = 1;
					break;
				}
				else
				{
					$find = 0;				
				}
			}
		}
		if ($find == 1) {
			return FALSE;
		}
		return TRUE; 
	}
}
?>