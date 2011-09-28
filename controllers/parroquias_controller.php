<?php
class ParroquiasController extends AppController {

	var $name = 'Parroquias';

	function index() {
		$this->Parroquia->recursive = 0;
		$this->set('parroquias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid parroquia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('parroquia', $this->Parroquia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Parroquia->create();
			if ($this->Parroquia->save($this->data)) {
				$this->Session->setFlash(__('The parroquia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.', true));
			}
		}
		$estados = $this->Parroquia->Estado->find('list');
		$municipios = $this->Parroquia->Municipio->find('list');
		$this->set(compact('estados', 'municipios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid parroquia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Parroquia->save($this->data)) {
				$this->Session->setFlash(__('The parroquia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Parroquia->read(null, $id);
		}
		$estados = $this->Parroquia->Estado->find('list');
		$municipios = $this->Parroquia->Municipio->find('list');
		$this->set(compact('estados', 'municipios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for parroquia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Parroquia->delete($id)) {
			$this->Session->setFlash(__('Parroquia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Parroquia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Parroquia->recursive = 0;
		$this->set('parroquias', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid parroquia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('parroquia', $this->Parroquia->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Parroquia->create();
			if ($this->Parroquia->save($this->data)) {
				$this->Session->setFlash(__('The parroquia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.', true));
			}
		}
		$estados = $this->Parroquia->Estado->find('list');
		$municipios = $this->Parroquia->Municipio->find('list');
		$this->set(compact('estados', 'municipios'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid parroquia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Parroquia->save($this->data)) {
				$this->Session->setFlash(__('The parroquia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Parroquia->read(null, $id);
		}
		$estados = $this->Parroquia->Estado->find('list');
		$municipios = $this->Parroquia->Municipio->find('list');
		$this->set(compact('estados', 'municipios'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for parroquia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Parroquia->delete($id)) {
			$this->Session->setFlash(__('Parroquia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Parroquia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
