<?php
class formTextareaCKEditorElement extends formElement
{
	public function render() {
		$form=NULL;
		$form.= $this->renderTitle();

		$form.="<textarea id='{$this->data['name']}' name='{$this->data['name']}' class='noborder'>{$this->data['value']}</textarea>";
		$form.="<script type='text/javascript'>
				$(document).ready(function(){loadEditor('{$this->data['name']}','{$this->data['attributes']['editorType']}');})
				</script>";
		return $form;
	}
}
?>