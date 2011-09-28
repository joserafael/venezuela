<?php
class CiudadesController extends AppController {

	var $name = 'Ciudades';

	function index() {
		$this->Ciudade->recursive = 0;
		$this->set('ciudades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ciudade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ciudade', $this->Ciudade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ciudade->create();
			if ($this->Ciudade->save($this->data)) {
				$this->Session->setFlash(__('The ciudade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudade could not be saved. Please, try again.', true));
			}
		}
		$parroquias = $this->Ciudade->Parroquium->find('list');
		$municipios = $this->Ciudade->Municipio->find('list');
		$estados = $this->Ciudade->Estado->find('list');
		$this->set(compact('parroquias', 'municipios', 'estados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ciudade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ciudade->save($this->data)) {
				$this->Session->setFlash(__('The ciudade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ciudade->read(null, $id);
		}
		$parroquias = $this->Ciudade->Parroquium->find('list');
		$municipios = $this->Ciudade->Municipio->find('list');
		$estados = $this->Ciudade->Estado->find('list');
		$this->set(compact('parroquias', 'municipios', 'estados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ciudade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ciudade->delete($id)) {
			$this->Session->setFlash(__('Ciudade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ciudade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Ciudade->recursive = 0;
		$this->set('ciudades', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ciudade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ciudade', $this->Ciudade->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Ciudade->create();
			if ($this->Ciudade->save($this->data)) {
				$this->Session->setFlash(__('The ciudade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudade could not be saved. Please, try again.', true));
			}
		}
		$parroquias = $this->Ciudade->Parroquium->find('list');
		$municipios = $this->Ciudade->Municipio->find('list');
		$estados = $this->Ciudade->Estado->find('list');
		$this->set(compact('parroquias', 'municipios', 'estados'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ciudade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ciudade->save($this->data)) {
				$this->Session->setFlash(__('The ciudade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciudade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ciudade->read(null, $id);
		}
		$parroquias = $this->Ciudade->Parroquium->find('list');
		$municipios = $this->Ciudade->Municipio->find('list');
		$estados = $this->Ciudade->Estado->find('list');
		$this->set(compact('parroquias', 'municipios', 'estados'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ciudade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ciudade->delete($id)) {
			$this->Session->setFlash(__('Ciudade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ciudade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
