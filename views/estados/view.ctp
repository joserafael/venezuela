<div class="well">
<h2>Estado: <?php echo $estado['Estado']['nombre']; ?></h2>
	
			
			
			
</div>

<div class="well">
	<h3>Ciudades en el Estado <?php echo $estado['Estado']['nombre']; ?></h3>
	<?php if (!empty($estado['Ciudade'])):?>
	<table class="table table-striped table-bordered table-condensed">
	<tr>
	
		<th><?php __('Nombre'); ?></th>
	
		
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Ciudade'] as $ciudade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			
			<td><?php echo $this->Html->link(__($ciudade['nombre'], true), array('controller' => 'ciudades', 'action' => 'view', $ciudade['id'])); ?></td>
		
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3>Municipios en el Estado <?php echo $estado['Estado']['nombre']; ?></h3>
	<?php if (!empty($estado['Municipio'])):?>
	<table class="table table-striped table-bordered table-condensed">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Municipio'] as $municipio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $municipio['id'];?></td>
			<td><?php echo $municipio['nombre'];?></td>
			<td><?php echo $municipio['estado_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'municipios', 'action' => 'view', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'municipios', 'action' => 'edit', $municipio['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'municipios', 'action' => 'delete', $municipio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Parroquias');?></h3>
	<?php if (!empty($estado['Parroquia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Parroquia'] as $parroquia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $parroquia['id'];?></td>
			<td><?php echo $parroquia['nombre'];?></td>
			<td><?php echo $parroquia['estado_id'];?></td>
			<td><?php echo $parroquia['municipio_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'parroquias', 'action' => 'view', $parroquia['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'parroquias', 'action' => 'edit', $parroquia['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'parroquias', 'action' => 'delete', $parroquia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parroquia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parroquia', true), array('controller' => 'parroquias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
