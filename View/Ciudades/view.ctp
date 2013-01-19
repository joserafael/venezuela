<div class="ciudades view">
<h2><?php  echo __('Ciudade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parroquia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciudade['Parroquia']['id'], array('controller' => 'parroquias', 'action' => 'view', $ciudade['Parroquia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciudade['Municipio']['id'], array('controller' => 'municipios', 'action' => 'view', $ciudade['Municipio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciudade['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $ciudade['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigoarea'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['codigoarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigopostal'); ?></dt>
		<dd>
			<?php echo h($ciudade['Ciudade']['codigopostal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciudade'), array('action' => 'edit', $ciudade['Ciudade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ciudade'), array('action' => 'delete', $ciudade['Ciudade']['id']), null, __('Are you sure you want to delete # %s?', $ciudade['Ciudade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parroquias'), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia'), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios'), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio'), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
