<div class="main-area-title">
	<h3>Chamados</h3>
</div>
<div class="main-area-content">
	<div class="buttons">
		<?php echo $this->Html->link('Novo Chamado', array('action'=>'add'), array('class'=>'btn b-novo')); ?>
	</div>
	<div class="paging"> 
		<span class="result"><?php echo $this->Paginator->counter(array( 'format' => 'Exibindo %start%-%end% de %count% registros.')); ?></span> 
		<?php echo $this->Paginator->prev('<< '.'anterior', array(), null, array('class'=>'disabled'));?>
		<span class="numbers"><?php echo $this->Paginator->numbers();?></span>
		<?php echo $this->Paginator->next('próximo'.' >>', array(), null, array('class'=>'disabled'));?> 
	</div>
	<div class="grid-basic">
		<table>
			<tr>
				<th><?php echo $this->Paginator->sort('titulo', 'Título');?></th>
				<th><?php echo $this->Paginator->sort('prioridade_id', 'Prioridade');?></th>
				<th><?php echo $this->Paginator->sort('setor_solicitante_id', 'Setor Solicitante');?></th>
				<th><?php echo $this->Paginator->sort('setor_responsavel_id', 'Setor Responsável');?></th>
				<th><?php echo $this->Paginator->sort('resolvido', 'Resolvido');?></th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		<?php
			$i = 0;
			foreach ($chamados as $chamado)
				: $class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr <?php echo $class;?>>
				<td><?php echo $chamado['Chamado']['titulo']; ?></td>
				<td class="center"><?php echo $chamado['Prioridade']['nome']; ?></td>
				<td class="center"><?php echo $chamado['SetorSolicitante']['nome']; ?></td>
				<td class="center"><?php echo $chamado['SetorResponsavel']['nome']; ?></td>
				<td class="center"><?php echo $chamado['Chamado']['resolvido']?'Sim':'Não'; ?></td>
				<td class="action edit"><?php echo $this->Html->link('Editar', array('action'=>'edit', $chamado['Chamado']['id'],'page'=>$this->Paginator->params['paging']['Chamado']['page']), array('title'=>'Editar','class'=>'icon i-editar')); ?></td>
				<td class="action delete"><?php echo $this->Html->link('Excluir', array('action'=>'delete', $chamado['Chamado']['id']), array('title'=>'Excluir','class'=>'icon i-excluir'), sprintf('Deseja realmente excluir este registro ?', $chamado['Chamado']['id'])); ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
	<div class="paging"> 
		<span class="result"><?php echo $this->Paginator->counter(array( 'format' => 'Exibindo %start%-%end% de %count% registros.')); ?></span> 
		<?php echo $this->Paginator->prev('<< '.'anterior', array(), null, array('class'=>'disabled'));?>
		<span class="numbers"><?php echo $this->Paginator->numbers();?></span>
		<?php echo $this->Paginator->next('próximo'.' >>', array(), null, array('class'=>'disabled'));?> 
	</div>
</div>
<div id="bottom">
	<div class="buttons">
		<?php echo $this->Html->link('Novo Chamado', array('action'=>'index'), array('class'=>'btn b-novo')); ?>
	</div>
</div>
