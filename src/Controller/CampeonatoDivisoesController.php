<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampeonatoDivisoes Controller
 *
 * @property \App\Model\Table\CampeonatoDivisoesTable $CampeonatoDivisoes
 * @method \App\Model\Entity\CampeonatoDiviso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatoDivisoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $campeonatoDivisoes = $this->paginate($this->CampeonatoDivisoes);

        $this->set(compact('campeonatoDivisoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato Diviso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonatoDiviso = $this->CampeonatoDivisoes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('campeonatoDiviso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonatoDiviso = $this->CampeonatoDivisoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonatoDiviso = $this->CampeonatoDivisoes->patchEntity($campeonatoDiviso, $this->request->getData());
            if ($this->CampeonatoDivisoes->save($campeonatoDiviso)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $this->set(compact('campeonatoDiviso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato Diviso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonatoDiviso = $this->CampeonatoDivisoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonatoDiviso = $this->CampeonatoDivisoes->patchEntity($campeonatoDiviso, $this->request->getData());
            if ($this->CampeonatoDivisoes->save($campeonatoDiviso)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $this->set(compact('campeonatoDiviso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato Diviso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonatoDiviso = $this->CampeonatoDivisoes->get($id);
        if ($this->CampeonatoDivisoes->delete($campeonatoDiviso)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
