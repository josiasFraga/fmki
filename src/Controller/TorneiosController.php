<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Torneios Controller
 *
 * @property \App\Model\Table\TorneiosTable $Torneios
 * @method \App\Model\Entity\Torneio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TorneiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $torneios = $this->paginate($this->Torneios);

        $this->set(compact('torneios'));
    }

    /**
     * View method
     *
     * @param string|null $id Torneio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $torneio = $this->Torneios->get($id, [
            'contain' => ['TorneioInscricao'],
        ]);

        $this->set(compact('torneio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $torneio = $this->Torneios->newEmptyEntity();
        if ($this->request->is('post')) {
            $torneio = $this->Torneios->patchEntity($torneio, $this->request->getData());
            if ($this->Torneios->save($torneio)) {
                $this->Flash->success(__('The torneio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneio could not be saved. Please, try again.'));
        }
        $this->set(compact('torneio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Torneio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $torneio = $this->Torneios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $torneio = $this->Torneios->patchEntity($torneio, $this->request->getData());
            if ($this->Torneios->save($torneio)) {
                $this->Flash->success(__('The torneio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneio could not be saved. Please, try again.'));
        }
        $this->set(compact('torneio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Torneio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $torneio = $this->Torneios->get($id);
        if ($this->Torneios->delete($torneio)) {
            $this->Flash->success(__('The torneio has been deleted.'));
        } else {
            $this->Flash->error(__('The torneio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
