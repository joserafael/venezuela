<div class="well">
<h2><?php echo __('Municipio'); ?> <?php  echo __( h($municipio['Municipio']['nombre'])); ?></h2>
	
		<p><?php echo __('Estado'); ?> <?php echo $this->Html->link($municipio['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $municipio['Estado']['id'])); ?>
			&nbsp;</p>
		
</div>



<div class="well">
	<h3><?php echo __('Parroquias en el Municipio '); ?> <?php  echo __( h($municipio['Municipio']['nombre'])); ?></h3>
	<?php if (!empty($municipio['Parroquia'])): ?>
	<table class="table table-bordered">
	<tr>
		
		<th><?php echo __('Nombre'); ?></th>
		
		
	</tr>
	<?php
		$i = 0;
		foreach ($municipio['Parroquia'] as $parroquia): ?>
		<tr>
			
			<td><?php echo $this->Html->link(__($parroquia['nombre']), array('controller' => 'parroquias', 'action' => 'view', $parroquia['id'])); ?></td>
			
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
