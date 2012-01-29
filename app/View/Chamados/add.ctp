<div class="form">
	<h3>Novo Chamado</h3>
	<?php
	echo $this->Form->create('Chamado');
	echo $this->Form->input('titulo');
	echo $this->Form->input('descricao', array('type'=>'textarea'));
	echo $this->Form->input('setor_solicitante_id', array('options'=>$setores));
	echo $this->Form->input('usuario_solicitante_id', array('options'=>$usuarios));
	echo $this->Form->input('setor_responsavel_id', array('options'=>$setores));
	echo $this->Form->input('usuario_responsavel_id', array('options'=>$usuarios));
	echo $this->Form->input('prioridade_id', array('options'=>$prioridades));
	?>
	<div class="actions">
		<?php echo $this->Html->link('Cancelar', array('action' => 'index')); ?>
		<?php echo $this->Form->end('Salvar'); ?>
	</div>
</div>