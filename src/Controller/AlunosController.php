<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alunos Controller
 *
 * @property \App\Model\Table\AlunosTable $Alunos
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlunosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $this->request->allowMethod(['get']);
        $this->paginate = [
            'contain' => ['Graduacoes', 'Academias', 'Cidades'],
        ];

        $user = $this->Authentication->getIdentity();
        $query = $user->applyScope('index', $this->Alunos->find('all'));
        $alunos = $this->paginate($query);

        $this->set(compact('alunos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => ['Graduacoes', 'Academias', 'Cidades', 'CampeonatoInscricoes'],
        ]);

        $this->Authorization->authorize($aluno);

        $this->set(compact('aluno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Alunos->newEmptyEntity();
        $user = $this->Authentication->getIdentity();
        $this->Authorization->authorize($aluno);

        if ($this->request->is('post')) {

            $dados = $this->request->getData();
            if ( $user->role != 'admin' ) {
                $dados['academia_id'] = $user->academia_id;
            }

            $aluno = $this->Alunos->patchEntity($aluno, $dados);

            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $graduacoes = $this->Alunos->Graduacoes->find('list', ['limit' => 200, 'order' => ['Graduacoes.id']])->all();
        //$academias = $this->Alunos->Academias->find('list', ['limit' => 200])->all();

        $academias = $this->Alunos->Academias->find('list', ['limit' => 200]);
        $query = $user->applyScope('index', $academias);
        $academias = $query->all();
        //$cidades = $this->Alunos->Cidades->find('list', ['limit' => 200])->all();
        $this->set(compact('aluno', 'graduacoes', 'academias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => [],
        ]);

        $this->Authorization->authorize($aluno);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $graduacoes = $this->Alunos->Graduacoes->find('list', ['limit' => 200, 'order' => ['Graduacoes.id']])->all();
        $academias = $this->Alunos->Academias->find('list', ['limit' => 200])->all();
        $cidades = $this->Alunos->Cidades->find('list', ['limit' => 200])->all();
        $this->set(compact('aluno', 'graduacoes', 'academias', 'cidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Alunos->get($id);
        $this->Authorization->authorize($aluno);

        if ($this->Alunos->delete($aluno)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function generateCard($id = null)
    {
        $this->viewBuilder()->setLayout('ajax');

        $aluno = $this->Alunos->get($id, [
            'contain' => ['Graduacoes', 'Academias'],
        ]);

        $this->Authorization->authorize($aluno);

        $this->set(compact('aluno'));


        
    }
}
