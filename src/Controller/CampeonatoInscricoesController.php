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

        $this->request->allowMethod(['get']);
        $this->paginate = [
            'contain' => ['Campeonatos', 'Alunos', 'Academias', 'CampeonatoCategorias'],
        ];

        $user = $this->Authentication->getIdentity();
        $query = $user->applyScope('index', $this->CampeonatoInscricoes->find('all'));
        $campeonatoInscricoes = $this->paginate($query);

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
            'contain' => ['Campeonatos', 'Alunos', 'Academias', 'CampeonatoCategorias'],
        ]);

        $this->Authorization->authorize($campeonatoInscrico);

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
        $user = $this->Authentication->getIdentity();
        $this->Authorization->authorize($campeonatoInscrico);

        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            if ( $user->role != 'admin' ) {
                $dados['academia_id'] = $user->academia_id;
            }

            if ( !isset($dados['aluno_id']) || !is_array($dados['aluno_id']) || count($dados['aluno_id']) == 0 ) {
                
                $this->Flash->error(__('The record not be saved. Please, try again.'));

            } else {
                $this->loadModel('Alunos');
                $this->loadModel('CampeonatoCategorias');
                foreach($dados['aluno_id'] as $key => $aluno_id){
                    $dados_aluno = $this->Alunos->get($aluno_id)->toArray();

                    if ( !$dados_aluno || empty($dados_aluno) ){
                        continue;
                    }

                    $dados_categoria = $this->CampeonatoCategorias->find('all')->where([
                        'CampeonatoCategorias.id' => 2
                    ])->first()->toArray();

                    debug($dados_aluno);
                    debug($dados_categoria);
                    die();

                    $dados_salvar[] = [
                        'campeonato_id' => $dados['campeonato_id'],
                        'aluno_id' => $aluno_id,
                        'academia_id' => $dados_aluno['academia_id'],
                    ];

                }

                debug($dados_salvar);
                die();

                $campeonatoInscrico = $this->CampeonatoInscricoes->patchEntity($campeonatoInscrico, $this->request->getData());
                if ($this->CampeonatoInscricoes->save($campeonatoInscrico)) {
                    $this->Flash->success(__('The record has been saved').'.');
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The record not be saved. Please, try again.'));

            }
        }
        $campeonatos = $this->CampeonatoInscricoes->Campeonatos->find('list', ['limit' => 200])->all();
        $alunos = $this->CampeonatoInscricoes->Alunos->find('list', ['limit' => 200]);
        $query = $user->applyScope('index', $alunos);
        $alunos = $query->all();

        $academias = $this->CampeonatoInscricoes->Academias->find('list', ['limit' => 200]);
        $query = $user->applyScope('index', $academias);
        $academias = $query->all();

        $campeonatoCategorias = $this->CampeonatoInscricoes->CampeonatoCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('campeonatoInscrico', 'campeonatos', 'alunos', 'academias', 'campeonatoCategorias'));
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
        $this->set(compact('campeonatoInscrico', 'campeonatos', 'alunos', 'academias', 'campeonatoCategorias'));
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
