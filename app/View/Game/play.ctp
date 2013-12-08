<div class="play form">
<?php echo $this->Session->flash('auth'); ?>

	<h2><?php echo "O corredor  é " . AuthComponent::user('username'); ?></h2>
	<fieldset>
		<legend><?php echo __('Decathlon'); ?></legend>
	</fieldset>
	
	<center>
		<iframe style="border: 0; overflow: hidden;" width="594" height="296" src="../app/webroot/game1/iframe.html" scrolling="no" frameborder="0"></iframe>
		<div style="width: 600px; height: 115px; top: 300px; color: white; font-size: 10pt;">
			<p style="text-align: center">Como jogar : torça pelo seu corredor usando [1] para o corredor 1 ou [2] para o corredor 2.</p>
			<p style="text-align: center">Os obstáculos irão atrasar o jogador que estiver liderando a prova.</p>
			<p style="text-align: center">Vence o corredor que tiver a maior torcida, chegando na frente....</p>
			<p style="text-align: center">QUE VENÇA A MELHOR TORCIDA !</p>
			<!-- AddThis Button BEGIN -->
			<script type="text/javascript">addthis_pub  = 'bogus@onaluf.org';</script>
			<p><a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s9.addthis.com/button1-share.gif" width="125" height="16" border="0" alt="" /></a><script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script></p>
			<!-- AddThis Button END -->
		</div>
	</center>
	<!--<div id="debugconsol" style="position: absolute; bottom: 5px; width: 600px; height: 100px; background: #ddd; overflow: auto;"></div>-->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-3540624-2");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>
</div>

<div class="actions">
	<h3><?php echo __('Meus itens'); ?></h3>
	<ul>
		<li>Shorts da Mike </li>
		<li>Camisa VERMELHA </li>
		<li>Tenis VERDE da ardidus </li>
	</ul>
	<h3 style="padding-top:20px"><?php echo __('Torcendo para'); ?></h3>
	<ul>
		<li><img src="../img/nouser.png" width="32" height="32"/>Corredor1</li>
	</ul>
	<h3 style="padding-top:20px"><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Comprar itens'), array('action' => 'comprar', $usuario['Users']['login'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Avancar categoria'), array('action' => 'play', $usuario['Usuario']['login']), null, __('Deseja avancar sua categoria # %s?', $usuario['Usuario']['login'])); ?> </li>
		<li><?php echo $this->Html->link(__('Torcer para outro corredor'), array('action' => 'play', $usuario['Usuario']['login']), null, __('Deseja mudar sua torcida # %s?', $usuario['Usuario']['login'])); ?></li>
	</ul>
	
	<h3 style="padding-top:20px"><?php echo __('Historico de ações'); ?></h3>
	<ul>
		<li>Sua ultima corrida chegou em segunda posicao.</li>
		<li>Voce avancou mais uma categoria, <br>agora voce e Semi-Professional!</li>
		<li><img src="../img/nouser.png" width="24" height="24"/>Corredor3 esta torcendo por voce!</li>
	</ul>
</div>