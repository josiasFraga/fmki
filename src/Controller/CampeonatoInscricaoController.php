<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CampeonatoInscricao Controller
 *
 * @property \App\Model\Table\CampeonatoInscricaoTable $CampeonatoInscricao
 * @method \App\Model\Entity\CampeonatoInscricao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampeonatoInscricaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campeonatos', 'Alunos', 'Academias', 'CampeonatoCategorias'],
        ];
        $campeonatoInscricao = $this->paginate($this->CampeonatoInscricao);

        $this->set(compact('campeonatoInscricao'));
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato Inscricao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonatoInscricao = $this->CampeonatoInscricao->get($id, [
            'contain' => ['Campeonatos', 'Alunos', 'Academias', 'CampeonatoCategorias'],
        ]);

        $this->set(compact('campeonatoInscricao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonatoInscricao = $this->CampeonatoInscricao->newEmptyEntity();
        if ($this->request->is('post')) {
            $campeonatoInscricao = $this->CampeonatoInscricao->patchEntity($campeonatoInscricao, $this->request->getData());
            if ($this->CampeonatoInscricao->save($campeonatoInscricao)) {
                $this->Flash->success(__('The campeonato inscricao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campeonato inscricao could not be saved. Please, try again.'));
        }
        $campeonatos = $this->CampeonatoInscricao->Campeonatos->find('list', ['limit' => 200])->all();
        $alunos = $this->CampeonatoInscricao->Alunos->find('list', ['limit' => 200])->all();
        $academias = $this->CampeonatoInscricao->Academias->find('list', ['limit' => 200])->all();
        $campeonatoCategorias = $this->CampeonatoInscricao->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoInscricao', 'campeonatos', 'alunos', 'academias', 'campeonatoCategorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato Inscricao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonatoInscricao = $this->CampeonatoInscricao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonatoInscricao = $this->CampeonatoInscricao->patchEntity($campeonatoInscricao, $this->request->getData());
            if ($this->CampeonatoInscricao->save($campeonatoInscricao)) {
                $this->Flash->success(__('The campeonato inscricao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campeonato inscricao could not be saved. Please, try again.'));
        }
        $campeonatos = $this->CampeonatoInscricao->Campeonatos->find('list', ['limit' => 200])->all();
        $alunos = $this->CampeonatoInscricao->Alunos->find('list', ['limit' => 200])->all();
        $academias = $this->CampeonatoInscricao->Academias->find('list', ['limit' => 200])->all();
        $campeonatoCategorias = $this->CampeonatoInscricao->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoInscricao', 'campeonatos', 'alunos', 'academias', 'campeonatoCategorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato Inscricao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonatoInscricao = $this->CampeonatoInscricao->get($id);
        if ($this->CampeonatoInscricao->delete($campeonatoInscricao)) {
            $this->Flash->success(__('The campeonato inscricao has been deleted.'));
        } else {
            $this->Flash->error(__('The campeonato inscricao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
