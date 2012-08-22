<?php
class formInputDataPickerElement extends formElement
{
	public function render()
	{
		$form=NULL;
		$attributes = $this->data['attributes'];

		if ($attributes['class']!=null) {$class = "class='{$attributes['class']}'";}
		$placeholder = $this->renderPlaceholder();
		$popover = $this->renderPopover();
		$tooltip = $this->renderTooltip();
		$error = $this->renderError();
		
		$form .= $this->renderTitle();
		$form .= "<div class='controls'>";
		$form .= "<input type='{$this->data['type']}' name='{$this->data['name']}' value='{$this->data['value']}' id='datepicker' $class $popover $placeholder $tooltip>";
		$form .= $error;
		$form .= "</div>";
		
		$form .='
		<script>
		$(function() {
			$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
			$( "#datepicker" ).datepicker( "setDate" , '.$this->data['value'].');
		});
		</script>';
		
		return $form;
	}	
}
	