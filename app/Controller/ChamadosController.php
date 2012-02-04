<?php
class ChamadosController extends AppController {
	var $name = 'Chamados';
	var $uses = array('Chamado', 'Usuario', 'Setor', 'Prioridade');
	var $helpers = array('Html', 'Form');
	var $components = array('Paginator');
	
	public function index() {
		$this->Chamado->recursive = 0;
		$this->Paginator->settings = array('limit' => 100, 'maxLimit' => 10000);
		$this->set('chamados', $this->paginate());
		//$this->set('chamados', $this->Chamado->getUltimosChamados());
		
	}
	
	public function add() {
        if ($this->request->is('post')) {
            if ($this->Chamado->save($this->request->data)) {
                $this->Session->setFlash('Your chamados has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your chamados.');
            }
        }
        $this->set('usuarios', $this->Usuario->find('list'));
        $this->set('setores', $this->Setor->find('list'));
        $this->set('prioridades', $this->Prioridade->find('list'));
    }
}

