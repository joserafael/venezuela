<div class="municipios view">
<h2><?php  echo __('Municipio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($municipio['Municipio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($municipio['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $municipio['Estado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipio'), array('action' => 'edit', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipio'), array('action' => 'delete', $municipio['Municipio']['id']), null, __('Are you sure you want to delete # %s?', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parroquias'), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia'), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ciudades'); ?></h3>
	<?php if (!empty($municipio['Ciudade'])): ?>
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
		foreach ($municipio['Ciudade'] as $ciudade): ?>
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
<div class="related">
	<h3><?php echo __('Related Parroquias'); ?></h3>
	<?php if (!empty($municipio['Parroquia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Municipio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($municipio['Parroquia'] as $parroquia): ?>
		<tr>
			<td><?php echo $parroquia['id']; ?></td>
			<td><?php echo $parroquia['nombre']; ?></td>
			<td><?php echo $parroquia['estado_id']; ?></td>
			<td><?php echo $parroquia['municipio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'parroquias', 'action' => 'view', $parroquia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parroquias', 'action' => 'edit', $parroquia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parroquias', 'action' => 'delete', $parroquia['id']), null, __('Are you sure you want to delete # %s?', $parroquia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parroquia'), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
