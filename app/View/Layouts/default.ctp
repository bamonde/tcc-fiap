<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>TCC</title>
  <?php echo $this->Html->css('estilo'); ?>
  <?php echo $this->Html->css('estilo_lista'); ?>
  <?php echo $this->Html->css('form'); ?>
</head>

<body>
<div id="geral">
	<div id="content">
		<div id="logo">
			<h1>Chamados TCC</h1>
		</div>
		<div id="menu">
			<ul>
				<li><?php echo $this->Html->link('Chamados', '/chamados', array('class'=>'callers')) ?></li>
				<li><?php echo $this->Html->link('Usuarios', '/', array('class'=>'users')) ?></li>
				<li><?php echo $this->Html->link('Setores', '/', array('class'=>'sectors')) ?></li>
				<li><?php echo $this->Html->link('Prioridades', '/', array('class'=>'priority')) ?></li>
			</ul>
		</div>
		<?php $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
</div>
</body>
</html>

