<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th><?php echo $this->Paginator->sort('score'); ?></th>
			<th><?php echo $this->Paginator->sort('velocidadeMedia'); ?></th>
			<th><?php echo $this->Paginator->sort('dataHoraJogada'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_tennis'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_shorts'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_camisa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['login']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['senha']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['score']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['velocidadeMedia']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['dataHoraJogada']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo_categoria']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo_tennis']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo_shorts']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipo_camisa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['login'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['login'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['login']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['login'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>
