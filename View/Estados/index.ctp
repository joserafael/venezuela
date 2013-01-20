<div class="well">
	<h2><?php echo __('Estados'); ?></h2>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			
	</tr>
	<?php
	foreach ($estados as $estado): ?>
	<tr>
		<td><?php echo h($estado['Estado']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($estado['Estado']['nombre'], array('action' => 'view', $estado['Estado']['id'])); ?>
			&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	
</div>
