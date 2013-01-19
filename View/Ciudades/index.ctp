<div class="ciudades index">
	<h2><?php echo __('Ciudades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('parroquia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('municipio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('codigoarea'); ?></th>
			<th><?php echo $this->Paginator->sort('codigopostal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($ciudades as $ciudade): ?>
	<tr>
		<td><?php echo h($ciudade['Ciudade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ciudade['Parroquia']['id'], array('controller' => 'parroquias', 'action' => 'view', $ciudade['Parroquia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ciudade['Municipio']['id'], array('controller' => 'municipios', 'action' => 'view', $ciudade['Municipio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ciudade['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $ciudade['Estado']['id'])); ?>
		</td>
		<td><?php echo h($ciudade['Ciudade']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($ciudade['Ciudade']['codigoarea']); ?>&nbsp;</td>
		<td><?php echo h($ciudade['Ciudade']['codigopostal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ciudade['Ciudade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ciudade['Ciudade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ciudade['Ciudade']['id']), null, __('Are you sure you want to delete # %s?', $ciudade['Ciudade']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parroquias'), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia'), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
