<?php
class formTextareaElement extends formElement
{
	public function render() {
		$form=NULL;
		$form.= $this->renderTitle();
		$form.= '<div class="controls">';
		$form.= "<textarea class='span11 input-xxlarge-height' name='{$this->data['name']}'>{$this->data['value']}</textarea>";
		$form.= '</div>';
		return $form;
	}
}
?>