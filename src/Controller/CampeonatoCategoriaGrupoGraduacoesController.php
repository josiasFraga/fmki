<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampeonatoCategoriaGrupoGraduacoes Controller
 *
 * @property \App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable $CampeonatoCategoriaGrupoGraduacoes
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatoCategoriaGrupoGraduacoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CampeonatoCategoriaGrupos', 'Graduacoes'],
        ];
        $campeonatoCategoriaGrupoGraduacoes = $this->paginate($this->CampeonatoCategoriaGrupoGraduacoes);

        $this->set(compact('campeonatoCategoriaGrupoGraduacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato Categoria Grupo Graduaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonatoCategoriaGrupoGraduaco = $this->CampeonatoCategoriaGrupoGraduacoes->get($id, [
            'contain' => ['CampeonatoCategoriaGrupos', 'Graduacoes'],
        ]);

        $this->set(compact('campeonatoCategoriaGrupoGraduaco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonatoCategoriaGrupoGraduaco = $this->CampeonatoCategoriaGrupoGraduacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonatoCategoriaGrupoGraduaco = $this->CampeonatoCategoriaGrupoGraduacoes->patchEntity($campeonatoCategoriaGrupoGraduaco, $this->request->getData());
            if ($this->CampeonatoCategoriaGrupoGraduacoes->save($campeonatoCategoriaGrupoGraduaco)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $campeonatoCategoriaGrupos = $this->CampeonatoCategoriaGrupoGraduacoes->CampeonatoCategoriaGrupos->find('list', ['limit' => 200])->all();
        $graduacoes = $this->CampeonatoCategoriaGrupoGraduacoes->Graduacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoCategoriaGrupoGraduaco', 'campeonatoCategoriaGrupos', 'graduacoes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato Categoria Grupo Graduaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonatoCategoriaGrupoGraduaco = $this->CampeonatoCategoriaGrupoGraduacoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonatoCategoriaGrupoGraduaco = $this->CampeonatoCategoriaGrupoGraduacoes->patchEntity($campeonatoCategoriaGrupoGraduaco, $this->request->getData());
            if ($this->CampeonatoCategoriaGrupoGraduacoes->save($campeonatoCategoriaGrupoGraduaco)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $campeonatoCategoriaGrupos = $this->CampeonatoCategoriaGrupoGraduacoes->CampeonatoCategoriaGrupos->find('list', ['limit' => 200])->all();
        $graduacoes = $this->CampeonatoCategoriaGrupoGraduacoes->Graduacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoCategoriaGrupoGraduaco', 'campeonatoCategoriaGrupos', 'graduacoes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato Categoria Grupo Graduaco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonatoCategoriaGrupoGraduaco = $this->CampeonatoCategoriaGrupoGraduacoes->get($id);
        if ($this->CampeonatoCategoriaGrupoGraduacoes->delete($campeonatoCategoriaGrupoGraduaco)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
