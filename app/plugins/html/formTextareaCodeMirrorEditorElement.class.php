<?php
class formtextareaCodeMirrorEditorElement extends formElement
{
	public function render() {
		$form=NULL;
		$form.= $this->renderTitle();

		$form.="<textarea id='{$this->data['name']}CodeMirror' name='{$this->data['name']}'>{$this->data['value']}</textarea>";
		$form.="<script type='text/javascript'> 
				$(document).ready(
				function(){
					var editor = CodeMirror.fromTextArea(document.getElementById('{$this->data['name']}CodeMirror'), {
					  lineNumbers: true,
					  lineWrapping: true,
				        mode: {
				          name: 'smarty',
				          leftDelimiter: '{',
				          rightDelimiter: '}'
				        }
					});
					}
				)
				</script>
				";

		return $form;
	}
}
?>