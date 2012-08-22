{if $REQUEST->getVariable('m')!=null}
<div class="alert fade in alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<i class="color-icons icons-tick-button icon-margin"> </i><strong>{L key = $REQUEST->getVariable('m')}</strong>
</div>
{/if}