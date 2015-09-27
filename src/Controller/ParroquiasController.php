<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parroquias Controller
 *
 * @property \App\Model\Table\ParroquiasTable $Parroquias
 */
class ParroquiasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('parroquias', $this->paginate($this->Parroquias));
        $this->set('_serialize', ['parroquias']);
    }

    /**
     * View method
     *
     * @param string|null $id Parroquia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parroquia = $this->Parroquias->get($id, [
            'contain' => []
        ]);
        $this->set('parroquia', $parroquia);
        $this->set('_serialize', ['parroquia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parroquia = $this->Parroquias->newEntity();
        if ($this->request->is('post')) {
            $parroquia = $this->Parroquias->patchEntity($parroquia, $this->request->data);
            if ($this->Parroquias->save($parroquia)) {
                $this->Flash->success(__('The parroquia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The parroquia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('parroquia'));
        $this->set('_serialize', ['parroquia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Parroquia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parroquia = $this->Parroquias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parroquia = $this->Parroquias->patchEntity($parroquia, $this->request->data);
            if ($this->Parroquias->save($parroquia)) {
                $this->Flash->success(__('The parroquia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The parroquia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('parroquia'));
        $this->set('_serialize', ['parroquia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Parroquia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parroquia = $this->Parroquias->get($id);
        if ($this->Parroquias->delete($parroquia)) {
            $this->Flash->success(__('The parroquia has been deleted.'));
        } else {
            $this->Flash->error(__('The parroquia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
