<div class="ciudades form">
<?php echo $this->Form->create('Ciudade'); ?>
	<fieldset>
		<legend><?php echo __('Add Ciudade'); ?></legend>
	<?php
		echo $this->Form->input('parroquia_id');
		echo $this->Form->input('municipio_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('codigoarea');
		echo $this->Form->input('codigopostal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ciudades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parroquias'), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia'), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
