<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampeonatoInscricoes Controller
 *
 * @property \App\Model\Table\CampeonatoInscricoesTable $CampeonatoInscricoes
 * @method \App\Model\Entity\CampeonatoInscrico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatoInscricoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campeonatos', 'Alunos', 'Academias', 'CampeonatoCategorias', 'CampeonatoDivisoes'],
        ];
        $campeonatoInscricoes = $this->paginate($this->CampeonatoInscricoes);

        $this->set(compact('campeonatoInscricoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato Inscrico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonatoInscrico = $this->CampeonatoInscricoes->get($id, [
            'contain' => ['Campeonatos', 'Alunos', 'Academias', 'CampeonatoCategorias', 'CampeonatoDivisoes'],
        ]);

        $this->set(compact('campeonatoInscrico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonatoInscrico = $this->CampeonatoInscricoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonatoInscrico = $this->CampeonatoInscricoes->patchEntity($campeonatoInscrico, $this->request->getData());
            if ($this->CampeonatoInscricoes->save($campeonatoInscrico)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $campeonatos = $this->CampeonatoInscricoes->Campeonatos->find('list', ['limit' => 200])->all();
        $alunos = $this->CampeonatoInscricoes->Alunos->find('list', ['limit' => 200])->all();
        $academias = $this->CampeonatoInscricoes->Academias->find('list', ['limit' => 200])->all();
        $campeonatoCategorias = $this->CampeonatoInscricoes->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $campeonatoDivisoes = $this->CampeonatoInscricoes->CampeonatoDivisoes->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoInscrico', 'campeonatos', 'alunos', 'academias', 'campeonatoCategorias', 'campeonatoDivisoes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato Inscrico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonatoInscrico = $this->CampeonatoInscricoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonatoInscrico = $this->CampeonatoInscricoes->patchEntity($campeonatoInscrico, $this->request->getData());
            if ($this->CampeonatoInscricoes->save($campeonatoInscrico)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $campeonatos = $this->CampeonatoInscricoes->Campeonatos->find('list', ['limit' => 200])->all();
        $alunos = $this->CampeonatoInscricoes->Alunos->find('list', ['limit' => 200])->all();
        $academias = $this->CampeonatoInscricoes->Academias->find('list', ['limit' => 200])->all();
        $campeonatoCategorias = $this->CampeonatoInscricoes->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $campeonatoDivisoes = $this->CampeonatoInscricoes->CampeonatoDivisoes->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoInscrico', 'campeonatos', 'alunos', 'academias', 'campeonatoCategorias', 'campeonatoDivisoes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato Inscrico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonatoInscrico = $this->CampeonatoInscricoes->get($id);
        if ($this->CampeonatoInscricoes->delete($campeonatoInscrico)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
