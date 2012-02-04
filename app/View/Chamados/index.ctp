<div class="main-area-title">
	<h3>Chamados</h3>
</div>
<div class="main-area-content">
	<div class="buttons">
		<?php echo $this->Html->link('Novo Chamado', array('action'=>'add'), array('class'=>'btn b-novo')); ?>
	</div>
	<div class="grid-basic">
		<table>
			<tr>
				<th>Título</th>
				<th>Prioridade</th>
				<th>Setor Solicitante</th>
				<th>Setor Responsável</th>
				<th>Resolvido</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		<?php
			$i = 0;
			foreach ($chamados as $chamado):
				$class = null;
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
</div>
<div id="bottom">
	<div class="buttons">
		<?php echo $this->Html->link('Novo Chamado', array('action'=>'index'), array('class'=>'btn b-novo')); ?>
	</div>
</div>
