<?php
App::uses('AppController', 'Controller');
/**
 * Estados Controller
 *
 * @property Estado $Estado
 */
class EstadosController extends AppController {

/**
 * index method
 *
 * @return void
 */
    
    
    public $paginate = array(
        'limit' => 30,
        'order' => array(
            'Estado.id' => 'asc'
        )
    );
    
    
    
    
	public function index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Estado->id = $id;
		if (!$this->Estado->exists()) {
			throw new NotFoundException(__('Invalid estado'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}


}
