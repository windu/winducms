<?php
class formInputElement extends formElement
{
	public function render()
	{
		$form=NULL;
		$attributes = $this->data['attributes'];
		if ($this->data['type']=='checkbox' or $this->data['type']=='radio')
		{
			if ($this->data['type']=='radio' and isset($attributes['group']))
			{
				$form .= "<div class='controls'>";
				$form .= "<label class='radio'>";
				$form .= "<input type='{$this->data['type']}' name='{$attributes['group']}' value='{$this->data['value']}'>";	
				$form .= $this->data['title'];
				$form .= "</label>";
				$form .= "</div>";	
			}
			else
			{
				$form .= "<div class='controls'>";
				$form .= "<label class='checkbox'>";
				$form .= "<input type='{$this->data['type']}' name='{$this->data['name']}' value='{$this->data['value']}'>";	
				$form .= $this->data['title'];
				$form .= "</label>";
				$form .= "</div>";	
			}
		}
		else
		{
			
			if ($attributes['class']!=null) {$class = "class='{$attributes['class']}'";}
			$placeholder = $this->renderPlaceholder();
			$popover = $this->renderPopover();
			$tooltip = $this->renderTooltip();
			$error = $this->renderError();
			
			$form .= $this->renderTitle();
			$form .= "<div class='controls'>";
			$form .= "<input type='{$this->data['type']}' name='{$this->data['name']}' value='{$this->data['value']}' $class $popover $placeholder $tooltip>";
			$form .= $error;
			$form .= "</div>";
		}
		return $form;
	}	
}
	