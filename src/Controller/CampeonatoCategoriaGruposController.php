<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampeonatoCategoriaGrupos Controller
 *
 * @property \App\Model\Table\CampeonatoCategoriaGruposTable $CampeonatoCategoriaGrupos
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatoCategoriaGruposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CampeonatoCategorias'],
        ];
        $campeonatoCategoriaGrupos = $this->paginate($this->CampeonatoCategoriaGrupos);

        $this->set(compact('campeonatoCategoriaGrupos'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato Categoria Grupo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonatoCategoriaGrupo = $this->CampeonatoCategoriaGrupos->get($id, [
            'contain' => ['CampeonatoCategorias', 'CampeonatoCategoriaGrupoGraduacoes'],
        ]);

        $this->set(compact('campeonatoCategoriaGrupo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonatoCategoriaGrupo = $this->CampeonatoCategoriaGrupos->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonatoCategoriaGrupo = $this->CampeonatoCategoriaGrupos->patchEntity($campeonatoCategoriaGrupo, $this->request->getData());
            if ($this->CampeonatoCategoriaGrupos->save($campeonatoCategoriaGrupo)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $campeonatoCategorias = $this->CampeonatoCategoriaGrupos->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoCategoriaGrupo', 'campeonatoCategorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato Categoria Grupo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonatoCategoriaGrupo = $this->CampeonatoCategoriaGrupos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonatoCategoriaGrupo = $this->CampeonatoCategoriaGrupos->patchEntity($campeonatoCategoriaGrupo, $this->request->getData());
            if ($this->CampeonatoCategoriaGrupos->save($campeonatoCategoriaGrupo)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $campeonatoCategorias = $this->CampeonatoCategoriaGrupos->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoCategoriaGrupo', 'campeonatoCategorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato Categoria Grupo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonatoCategoriaGrupo = $this->CampeonatoCategoriaGrupos->get($id);
        if ($this->CampeonatoCategoriaGrupos->delete($campeonatoCategoriaGrupo)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
