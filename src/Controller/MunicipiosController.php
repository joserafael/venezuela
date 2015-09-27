<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Municipios Controller
 *
 * @property \App\Model\Table\MunicipiosTable $Municipios
 */
class MunicipiosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('municipios', $this->paginate($this->Municipios));
        $this->set('_serialize', ['municipios']);
    }

    /**
     * View method
     *
     * @param string|null $id Municipio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipio = $this->Municipios->get($id, [
            'contain' => []
        ]);
        $this->set('municipio', $municipio);
        $this->set('_serialize', ['municipio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipio = $this->Municipios->newEntity();
        if ($this->request->is('post')) {
            $municipio = $this->Municipios->patchEntity($municipio, $this->request->data);
            if ($this->Municipios->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('municipio'));
        $this->set('_serialize', ['municipio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipio = $this->Municipios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipio = $this->Municipios->patchEntity($municipio, $this->request->data);
            if ($this->Municipios->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('municipio'));
        $this->set('_serialize', ['municipio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipio = $this->Municipios->get($id);
        if ($this->Municipios->delete($municipio)) {
            $this->Flash->success(__('The municipio has been deleted.'));
        } else {
            $this->Flash->error(__('The municipio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
