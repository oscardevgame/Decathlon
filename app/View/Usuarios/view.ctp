<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VelocidadeMedia'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['velocidadeMedia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataHoraJogada'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['dataHoraJogada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Categoria'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Tennis'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo_tennis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Shorts'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo_shorts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Camisa'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipo_camisa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['login'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['login']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['login'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
