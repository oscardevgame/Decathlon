<div class="users index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, Exibindo {:current} usuarios de {:count} no total')
	));
	?>	</p>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Usuario'), array('action' => 'add')); ?></li>
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Logar e ir Jogar'), array('action' => '../game/play')); ?></li>
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Sobre o Jogo'), array('action' => '../game/index')); ?></li>
	</ul>
</div>
