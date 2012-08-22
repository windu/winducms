<?php
class form
{
	private $form = array();
	private $formButton = array();
	private $method = null;
	private $formAction = null;
	private $successAction = null;
	private $form_key = null;
	
	private $rule = array();
	private $handler = null;
	
	private $pom = 0;

		
	function __construct($id,$action,$data,$method = "POST",$cssClass = null,$linkAddon = null)
	{
		foreach ($data as $key => $dataRow){
			$data[$key] = stripcslashes($dataRow);
		}
		
		$this->formAction = __HOME.$linkAddon;
		$this->successAction = $action;
		$this->method = $method;
		$this->data = $data;
		$this->id = $id;
		$this->cssClass = $cssClass;
	}
	
	public function add( $name, $element='input-text', $title=NULL, $value=NULL, $attributes = array())
	{
		$element = ucfirst($element);
		if ($name == 'HTML')
		{
			$name = $name.'-'.microtime();
			$this->form[$name] = $element;
		}
		else
		{	
			@$atr = $attributes;
			if(@$atr['key']=='1')
			{
				if (is_array($atr['option']))
				{
					foreach ($atr['option'] as $key => $val)
					{
						if(@$_COOKIE[$name]==$key)
						{
							$value = $val;
						}					
					}
				}
			}
			else if ($this->isSubmitted() && isset($this->data[$name]))
			{
				$value = $this->data[$name];
			}
			else if(isset($_COOKIE[$name]))
			{
				$value = $_COOKIE[$name];
			}
			
			$element=explode('-', $element);
			if (!isset($element[1])) $element[1]=''; 
			$elementClassName = "form".$element[0]."Element";
			$this->form[$name] = new $elementClassName($name, $title, $value, $element[1], $attributes);
		}
	}
	public function addButton($name, $title = 'Save', $css = 'btn btn-primary', $url = null)
	{
		if ($url != null){
			$this->formButton[$name] = "<a href='{$url}' class='{$css}'>{$title}</a>";
		}else{
			$this->formButton[$name] = "<input type='submit' class='{$css}' value='{$title}'>";
		}
	}
	public function addRule($fieldName, $ruleName, $params = null, $errorText = null, $custom = false)
	{
		$this->rule[] = array("fieldName" => $fieldName, "ruleName" => $ruleName, "params" => $params, "custom" => $custom, "errorText" => $errorText);
	}	
	
	private function isSubmitted()
	{
		$pom_key = $this->data;
		if (isset($pom_key['form_key']))
		{
			if($pom_key['form_key'] == $this->id)
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
			return FALSE;
		}
	}
	
	private function validate()
	{
		$validator=new validator();
		//debugger::dprint($this->rule); exit;
		$errorNum = 0;
		foreach($this->rule as $rule)
		{
			$ruleName = $rule['ruleName'];
			$fieldName = $rule['fieldName'];
			$where = $rule['where'];

			$error = false;
			
			if ($rule['custom'] == true)
			{
				$error = $this->handler->$ruleName(@$this->data[$fieldName],$rule['params'], $this->data,$fieldName,$where);
			}
			else
			{
				$error = $validator->$ruleName(@$this->data[$fieldName],$rule['params'],$this->data,$fieldName,$where);
			}
			
			if ($error)
			{	
				$this->form[$fieldName]->setError($rule['errorText']);
				$errorNum++;
			}
		}
		return $errorNum;
	}
	
	public function setHandler($handler)
	{ 
        $this->handler = $handler;
	}
 
	public function handle()
	{ 
		if ($this->handler == null) throw new Exception("Handler not set"); 
        if ($this->isSubmitted())
        {
        	if ($this->validate() == 0)
        	{
        		unset($this->data['form_key']);
        		
        		if ($this->successAction == null)
        		{
        			$this->handler->success($this->data);
        		}
        		else
        		{
        			$hendler_pom = $this->handler;
        			$acction = $this->successAction;
        			$hendler_pom->$acction($this->data);
        		}
        	}
        }
	}

	public function renderStatus($cssErrorClass = "alert alert-error",$cssSuccessClass = "alert alert-success")
	{
		if ($this->isSubmitted()){
			$errors=null;
			foreach($this->form as $name => $formItem)
			{
				if (substr($name, 0, 4)!='HTML')
				{
					if ((count($formItem->errors))>0)
					{
						foreach($formItem->errors as $error)
						{
							$errors.=	"<li>{$error}</li>";
						}
					}
				}
			}	
			if ($errors==null){
				$status = '<div class="'.$cssSuccessClass.'">
				            <button type="button" class="close" data-dismiss="alert">×</button>
				            <h4 class="alert-heading">All is OK!</h4>
				          </div>';			
			}elseif($errors!=null){
				$status = '<div class="'.$cssErrorClass.'">
				            <button type="button" class="close" data-dismiss="alert">×</button>
				            <h4 class="alert-heading">Error!</h4>
				            <ul>
				            	'.$errors.'
				            </ul>
				          </div>';
			}
			return $status;
		}
	}
		
	public function render($name)
	{
		$element = $this->form[$name];
		return $element->render();
	}
	
	public function toHtml($cssButtonClass = "btn btn-primary")
	{
		$formHtml ="<form action='{$this->formAction}' enctype='multipart/form-data' method='{$this->method}' class='{$this->cssClass}'>";
		$formHtml.="<fieldset>";
		foreach($this->form as $name => $formItem)
		{
			if (substr($name, 0, 4)=='HTML')
			{
				$formHtml.=$formItem;
			}
			else
			{	if (count($formItem->errors) > 0) $style="error"; else $style="";
				//debugger::dprint($formItem);
				$formHtml.="<div class='control-group {$style}'>";
				$formHtml.=$formItem->render($name);
				$formHtml.="</div>";
			}
		}
		$formHtml.="<div class='form-actions'>";
		$formHtml.="<input type='hidden' name='form_key' value='".$this->id."'>";
		
		if(count($this->formButton) > 0){
			foreach($this->formButton as $button)
			{
				$formHtml .= $button;
			}
		}else{
			$formHtml .= "<input type='submit' class='{$cssButtonClass}' value='".lang::read('form.button.title.default')."'>";
		}
		
        $formHtml.="</div>"; 
		
		$formHtml.="</fieldset>";
		$formHtml.="</form>" ;
		//debugger::dprint($this); exit;
		return $formHtml;
	}
	
	public function toArray()
	{
		$formArray = array();
		foreach($this->form as $name => $formItem)
		{
			if (substr($name, 0, 4)=='HTML')
			{
				$formHtml.=$formItem;
			}
			else
			{
				$formArray[$name] = $formItem->toArray();
			}			
		}
		return $formArray;
	}
}
?>
