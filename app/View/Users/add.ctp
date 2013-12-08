<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Adicionar Usuário'); ?></legend>
        <?php echo $this->Form->input('username', array('label' =>'Login'));
        echo $this->Form->input('password', array('label' =>'Senha'));
        echo $this->Form->input('role', array(
            'options' => array('gamer' => 'Jogador', 'admin' => 'Administrador')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Cadastrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Logar e ir Jogar'), array('action' => '../game/play')); ?></li>
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Usuarios existentes'), array('action' => '../users')); ?></li>
	</ul>
	<ul>
		<li><?php echo $this->Html->link(__('Sobre o Jogo'), array('action' => '../game/index')); ?></li>
	</ul>
</div>