<div class="parroquias index">
	<h2><?php __('Parroquias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('municipio_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($parroquias as $parroquia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $parroquia['Parroquia']['id']; ?>&nbsp;</td>
		<td><?php echo $parroquia['Parroquia']['nombre']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parroquia['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $parroquia['Estado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($parroquia['Municipio']['nombre'], array('controller' => 'municipios', 'action' => 'view', $parroquia['Municipio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $parroquia['Parroquia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $parroquia['Parroquia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $parroquia['Parroquia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parroquia['Parroquia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Parroquia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades', true), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade', true), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>