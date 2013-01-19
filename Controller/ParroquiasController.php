<?php
App::uses('AppController', 'Controller');
/**
 * Parroquias Controller
 *
 * @property Parroquia $Parroquia
 */
class ParroquiasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Parroquia->recursive = 0;
		$this->set('parroquias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Parroquia->id = $id;
		if (!$this->Parroquia->exists()) {
			throw new NotFoundException(__('Invalid parroquia'));
		}
		$this->set('parroquia', $this->Parroquia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parroquia->create();
			if ($this->Parroquia->save($this->request->data)) {
				$this->Session->setFlash(__('The parroquia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Parroquia->Estado->find('list');
		$municipios = $this->Parroquia->Municipio->find('list');
		$this->set(compact('estados', 'municipios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Parroquia->id = $id;
		if (!$this->Parroquia->exists()) {
			throw new NotFoundException(__('Invalid parroquia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Parroquia->save($this->request->data)) {
				$this->Session->setFlash(__('The parroquia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Parroquia->read(null, $id);
		}
		$estados = $this->Parroquia->Estado->find('list');
		$municipios = $this->Parroquia->Municipio->find('list');
		$this->set(compact('estados', 'municipios'));
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
		$this->Parroquia->id = $id;
		if (!$this->Parroquia->exists()) {
			throw new NotFoundException(__('Invalid parroquia'));
		}
		if ($this->Parroquia->delete()) {
			$this->Session->setFlash(__('Parroquia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Parroquia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
