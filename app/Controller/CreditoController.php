<?php
class CreditoController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'add', 'sub');
    }

    public function index() {
        $this->Credito->id = $id;
        $this->set('Credito', $this->Credito->read(null, $id));
    }

    public function add($id = null, $quantidade, $tipo) {
        $this->Credito->id = $id;
        if (!$this->Credito->exists()) {
			$this->Credito->create();
			$this->Credito->save($this->request->data);
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Credito->save($this->request->data)) {
                $this->Session->setFlash(__('Credito adicionado'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Credito nao pode ser adicionado.'));
            }
        } else {
            $this->request->data = $this->Credito->read(null, $id);
            unset($this->request->data['Credito']['valor']);
        }
    }	
}