<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Graduacoes Controller
 *
 * @property \App\Model\Table\GraduacoesTable $Graduacoes
 * @method \App\Model\Entity\Graduaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GraduacoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $graduacoes = $this->paginate($this->Graduacoes);

        $this->set(compact('graduacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Graduaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $graduaco = $this->Graduacoes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('graduaco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $graduaco = $this->Graduacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $graduaco = $this->Graduacoes->patchEntity($graduaco, $this->request->getData());
            if ($this->Graduacoes->save($graduaco)) {
                $this->Flash->success(__('The graduaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The graduaco could not be saved. Please, try again.'));
        }
        $this->set(compact('graduaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Graduaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $graduaco = $this->Graduacoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $graduaco = $this->Graduacoes->patchEntity($graduaco, $this->request->getData());
            if ($this->Graduacoes->save($graduaco)) {
                $this->Flash->success(__('The graduaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The graduaco could not be saved. Please, try again.'));
        }
        $this->set(compact('graduaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Graduaco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $graduaco = $this->Graduacoes->get($id);
        if ($this->Graduacoes->delete($graduaco)) {
            $this->Flash->success(__('The graduaco has been deleted.'));
        } else {
            $this->Flash->error(__('The graduaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}