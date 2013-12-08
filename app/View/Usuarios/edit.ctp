<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('login');
		echo $this->Form->input('nome');
		echo $this->Form->input('senha');
		echo $this->Form->input('score');
		echo $this->Form->input('velocidadeMedia');
		echo $this->Form->input('dataHoraJogada');
		echo $this->Form->input('tipo_categoria');
		echo $this->Form->input('tipo_tennis');
		echo $this->Form->input('tipo_shorts');
		echo $this->Form->input('tipo_camisa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.login')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.login'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
