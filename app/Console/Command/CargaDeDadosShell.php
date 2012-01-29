<?php
class CargaDeDadosShell extends AppShell {
	var $uses = array('Prioridade', 'Setor', 'Usuario', 'Chamado');
	
	public function main() {
		$this->out('Iniciado!');
		$this->run();
	}
	private function run() {
		$this->out('Rodando');
		$this->prioridade();
		$this->setor();
		$this->usuario();
		$this->chamado();
		$this->terminated();		
	}
	private function terminated() {
		$this->out('Terminado!');
	}
	
	private function prioridade() {
		$prioridade = new Prioridade();
		$prioridade->query('truncate '.$prioridade->table);
		foreach ($this->Prioridade->dados as $id => $nome) {
			echo "\r$id - $nome";
			$this->Prioridade->create();
			$this->Prioridade->save(array(
				'id' => $id,
				'nome' => $nome
			));
		}
		echo "\n";
	}

	private function setor() {
		$setor = new Setor();
		$setor->query('truncate '.$setor->table);
		foreach ($this->Setor->dados as $id => $nome) {
			echo "\r$id - $nome";
			$this->Setor->create();
			$this->Setor->save(array(
				'id' => $id,
				'nome' => $nome
			));
		}
		echo "\n";
	}

	private function usuario() {
		$usuario = new Usuario();
		$usuario->query('truncate '.$usuario->table);
		foreach ($this->Usuario->dados as $id => $nome) {
			echo "\r$id - $nome";
			$this->Usuario->create();
			$this->Usuario->save(array(
				'id' => $id,
				'nome' => $nome,
				'setor_id' => rand(1,7)
			));
		}
		echo "\n";
	}

	private function chamado() {
		$this->Chamado->query('truncate '.$this->Chamado->table);
		$chamado = array(
			'id' => 0,
			'titulo' => '',
			'descricao' => '',
			'setor_solicitante_id' => 0,
			'usuario_solicitante_id' => 0,
			'setor_responsavel_id' => 0,
			'usuario_responsavel_id' => 0,
			'prioridade_id' => 0,
			'resolvido' => 0
		);
		
		for($i = 1; $i <= 10000; $i++) {
			echo "\rChamados $i";

			$chamado['id'] = $i;
			$chamado['titulo'] = $this->Chamado->titulos[rand(0,9)];
			$chamado['descricao'] = substr($this->Chamado->desricao, 0, rand(50, 1000));
			$chamado['setor_solicitante_id'] = rand(1,7);
			$chamado['usuario_solicitante_id'] = rand(1,7);
			$chamado['setor_responsavel_id'] = rand(1,7);
			$chamado['usuario_responsavel_id'] = rand(1,7);
			$chamado['prioridade_id'] = rand(0,2);
			$chamado['resolvido'] = rand(0,1);
			
			$this->Chamado->create();
			$this->Chamado->save($chamado);
		}
		echo "\n";
	}
}