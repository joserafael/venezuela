<div class="parroquias view">
<h2><?php  echo __('Parroquia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parroquia['Parroquia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($parroquia['Parroquia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parroquia['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $parroquia['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parroquia['Municipio']['id'], array('controller' => 'municipios', 'action' => 'view', $parroquia['Municipio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parroquia'), array('action' => 'edit', $parroquia['Parroquia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parroquia'), array('action' => 'delete', $parroquia['Parroquia']['id']), null, __('Are you sure you want to delete # %s?', $parroquia['Parroquia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parroquias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ciudades'); ?></h3>
	<?php if (!empty($parroquia['Ciudade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parroquia Id'); ?></th>
		<th><?php echo __('Municipio Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Codigoarea'); ?></th>
		<th><?php echo __('Codigopostal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($parroquia['Ciudade'] as $ciudade): ?>
		<tr>
			<td><?php echo $ciudade['id']; ?></td>
			<td><?php echo $ciudade['parroquia_id']; ?></td>
			<td><?php echo $ciudade['municipio_id']; ?></td>
			<td><?php echo $ciudade['estado_id']; ?></td>
			<td><?php echo $ciudade['nombre']; ?></td>
			<td><?php echo $ciudade['codigoarea']; ?></td>
			<td><?php echo $ciudade['codigopostal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ciudades', 'action' => 'view', $ciudade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ciudades', 'action' => 'edit', $ciudade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ciudades', 'action' => 'delete', $ciudade['id']), null, __('Are you sure you want to delete # %s?', $ciudade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
