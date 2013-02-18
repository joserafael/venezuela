<div class="well">
<h1> <?php echo h($estado['Estado']['nombre']); ?></h1>
	
</div>


<div class="well">
	<h3>Municipios en <?php echo h($estado['Estado']['nombre']); ?></h3>
	<?php if (!empty($estado['Municipio'])): ?>
	<table class="table table-bordered">
	<tr>
	
		<th><?php echo __('Nombre'); ?></th>
		
		
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Municipio'] as $municipio): ?>
		<tr>
			
			<td>	<?php echo $this->Html->link(__($municipio['nombre']), array('controller' => 'municipios', 'action' => 'view', $municipio['id'])); ?></td>
			
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>


