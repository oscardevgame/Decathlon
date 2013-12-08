<div class="login">
	<h2><?php echo __('Formulário de login'); ?></h2>
	
	<div class="users form">
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User');?>
			<fieldset>
				<legend><?php echo __('Insira seu login e senha'); ?></legend>
				<?php echo $this->Form->input('username', array('label'=>'Login'));
				echo $this->Form->input('password', array('label'=>'Senha'));
			?>	
			</fieldset>
		<?php echo $this->Form->end(__('Logar e Jogar'));?>
	</div>
</div>
<div class="actions">
	<p><img style="float:left;" alt="jogar" src="../img/img_play.png" width="40" height="40"><h2>Gostaria de se cadastrar?</h2></p>
	<ul>
		<li><?php echo $this->Html->link(__('Faça parte aqui'), array('action' => 'add')); ?></li>
	<ul>
		<li><?php echo $this->Html->link(__('Usuarios existentes'), array('action' => '../users/index')); ?></li>
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Sobre o Jogo'), array('action' => '../game/index')); ?></li>
	</ul>
</div>