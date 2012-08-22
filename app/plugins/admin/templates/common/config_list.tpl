<table class="table table-striped tablesort">
<thead>
	<tr>
		<th>{L key = "admin.config.tpl.constant"}</th>
		<th>{L key="admin.config.controller.value"}</th>
		<th>{L key="admin.config.controller.description"}</th>
		<th></th>
	</tr>
</thead>
<tbody>
  {foreach $list as $variable}
	<tr>
		<td><i class="color-icons icons-pill icon-margin">&nbsp;</i>{$variable->name}</td>
		<td>{$variable->value}</td>
		<td>{$variable->shortDescription}</td>
		<td>
			<div class="buttons">
				<a href="{$HOME}admin/{$class}/editConfig/{$variable->id}/{$tab}"><i class="icon-pencil icon-blue">&nbsp;</i></a>
				<a href="#tab4" rel="popoverconstantlist" title=' {$variable->name}' data-content="<div class='pad'>{$variable->description}</div>">	
					<i class="icon-question-sign icon-grey" >&nbsp;</i>
				</a>
			</div>
		</td>
	</tr>
  {/foreach}   
  </tbody>
</table>