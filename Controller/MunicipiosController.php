<?php
App::uses('AppController', 'Controller');
/**
 * Municipios Controller
 *
 * @property Municipio $Municipio
 */
class MunicipiosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$this->set('municipio', $this->Municipio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Municipio->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Municipio->read(null, $id);
		}
		$estados = $this->Municipio->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		if ($this->Municipio->delete()) {
			$this->Session->setFlash(__('Municipio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Municipio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
