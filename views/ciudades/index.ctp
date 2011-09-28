<div class="ciudades index">
	<h2><?php __('Ciudades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('parroquia_id');?></th>
			<th><?php echo $this->Paginator->sort('municipio_id');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('codigoarea');?></th>
			<th><?php echo $this->Paginator->sort('codigopostal');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ciudades as $ciudade):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ciudade['Ciudade']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ciudade['Parroquia']['nombre'], array('controller' => 'parroquias', 'action' => 'view', $ciudade['Parroquia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ciudade['Municipio']['nombre'], array('controller' => 'municipios', 'action' => 'view', $ciudade['Municipio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ciudade['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $ciudade['Estado']['id'])); ?>
		</td>
		<td><?php echo $ciudade['Ciudade']['nombre']; ?>&nbsp;</td>
		<td><?php echo $ciudade['Ciudade']['codigoarea']; ?>&nbsp;</td>
		<td><?php echo $ciudade['Ciudade']['codigopostal']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ciudade['Ciudade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ciudade['Ciudade']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ciudade['Ciudade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciudade['Ciudade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ciudade', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parroquias', true), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia', true), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>