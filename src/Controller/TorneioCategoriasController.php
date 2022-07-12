<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TorneioCategorias Controller
 *
 * @property \App\Model\Table\TorneioCategoriasTable $TorneioCategorias
 * @method \App\Model\Entity\TorneioCategoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TorneioCategoriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $torneioCategorias = $this->paginate($this->TorneioCategorias);

        $this->set(compact('torneioCategorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Torneio Categoria id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $torneioCategoria = $this->TorneioCategorias->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('torneioCategoria'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $torneioCategoria = $this->TorneioCategorias->newEmptyEntity();
        if ($this->request->is('post')) {
            $torneioCategoria = $this->TorneioCategorias->patchEntity($torneioCategoria, $this->request->getData());
            if ($this->TorneioCategorias->save($torneioCategoria)) {
                $this->Flash->success(__('The torneio categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneio categoria could not be saved. Please, try again.'));
        }
        $this->set(compact('torneioCategoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Torneio Categoria id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $torneioCategoria = $this->TorneioCategorias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $torneioCategoria = $this->TorneioCategorias->patchEntity($torneioCategoria, $this->request->getData());
            if ($this->TorneioCategorias->save($torneioCategoria)) {
                $this->Flash->success(__('The torneio categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneio categoria could not be saved. Please, try again.'));
        }
        $this->set(compact('torneioCategoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Torneio Categoria id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $torneioCategoria = $this->TorneioCategorias->get($id);
        if ($this->TorneioCategorias->delete($torneioCategoria)) {
            $this->Flash->success(__('The torneio categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The torneio categoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
