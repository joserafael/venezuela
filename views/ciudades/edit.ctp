<div class="ciudades form">
<?php echo $this->Form->create('Ciudade');?>
	<fieldset>
		<legend><?php __('Edit Ciudade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parroquia_id');
		echo $this->Form->input('municipio_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('codigoarea');
		echo $this->Form->input('codigopostal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ciudade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ciudade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Parroquias', true), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia', true), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>