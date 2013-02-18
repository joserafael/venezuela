<div class="well">
	<h2><?php echo __('Municipios'); ?></h2>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php
	foreach ($municipios as $municipio): ?>
	<tr>
		<td><?php echo h($municipio['Municipio']['id']); ?>&nbsp;</td>
		<td><?php echo h($municipio['Municipio']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($municipio['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $municipio['Estado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $municipio['Municipio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $municipio['Municipio']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} municipios de {:count} en total, comenzando con el registro {:start}, y finalizando con el registro {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
