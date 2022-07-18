<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Campeonatos Controller
 *
 * @property \App\Model\Table\CampeonatosTable $Campeonatos
 * @method \App\Model\Entity\Campeonato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatosController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->loadModel('Campeonatos');
        $Campeonatos = $this->Campeonatos->newEmptyEntity();
        $this->Authorization->authorize($Campeonatos);
    }
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
        $campeonatos = $this->paginate($this->Campeonatos);

        $this->set(compact('campeonatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => ['Cidades', 'CampeonatoInscricoes'],
        ]);

        $this->set(compact('campeonato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonato = $this->Campeonatos->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonato = $this->Campeonatos->patchEntity($campeonato, $this->request->getData());
            if ($this->Campeonatos->save($campeonato)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $cidades = $this->Campeonatos->Cidades->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonato', 'cidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonato = $this->Campeonatos->patchEntity($campeonato, $this->request->getData());
            if ($this->Campeonatos->save($campeonato)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $cidades = $this->Campeonatos->Cidades->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonato', 'cidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonato = $this->Campeonatos->get($id);
        if ($this->Campeonatos->delete($campeonato)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
