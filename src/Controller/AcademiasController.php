<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Academias Controller
 *
 * @property \App\Model\Table\AcademiasTable $Academias
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cidades'],
        ];
        $academias = $this->paginate($this->Academias);

        $this->set(compact('academias'));
    }

    /**
     * View method
     *
     * @param string|null $id Academia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academia = $this->Academias->get($id, [
            'contain' => ['Cidades', 'CampeonatoInscricao', 'Usuarios'],
        ]);

        $this->set(compact('academia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academia = $this->Academias->newEmptyEntity();
        if ($this->request->is('post')) {
            $academia = $this->Academias->patchEntity($academia, $this->request->getData());
            if ($this->Academias->save($academia)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $cidades = $this->Academias->Cidades->find('list', ['limit' => 200])->all();
        $this->set(compact('academia', 'cidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Academia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academia = $this->Academias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academia = $this->Academias->patchEntity($academia, $this->request->getData());
            if ($this->Academias->save($academia)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $cidades = $this->Academias->Cidades->find('list', ['limit' => 200])->all();
        $this->set(compact('academia', 'cidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Academia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academia = $this->Academias->get($id);
        if ($this->Academias->delete($academia)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
