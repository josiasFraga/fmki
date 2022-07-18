<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampeonatoCategorias Controller
 *
 * @property \App\Model\Table\CampeonatoCategoriasTable $CampeonatoCategorias
 * @method \App\Model\Entity\CampeonatoCategoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatoCategoriasController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->loadModel('CampeonatoCategorias');
        $campeonato_categorias = $this->CampeonatoCategorias->newEmptyEntity();
        $this->Authorization->authorize($campeonato_categorias);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $campeonatoCategorias = $this->paginate($this->CampeonatoCategorias);

        $this->set(compact('campeonatoCategorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato Categoria id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonatoCategoria = $this->CampeonatoCategorias->get($id, [
            'contain' => ['CampeonatoCategoriaGrupos'],
        ]);

        $this->set(compact('campeonatoCategoria'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonatoCategoria = $this->CampeonatoCategorias->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonatoCategoria = $this->CampeonatoCategorias->patchEntity($campeonatoCategoria, $this->request->getData());
            if ($this->CampeonatoCategorias->save($campeonatoCategoria)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $this->set(compact('campeonatoCategoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato Categoria id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonatoCategoria = $this->CampeonatoCategorias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonatoCategoria = $this->CampeonatoCategorias->patchEntity($campeonatoCategoria, $this->request->getData());
            if ($this->CampeonatoCategorias->save($campeonatoCategoria)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $this->set(compact('campeonatoCategoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato Categoria id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonatoCategoria = $this->CampeonatoCategorias->get($id);
        if ($this->CampeonatoCategorias->delete($campeonatoCategoria)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
