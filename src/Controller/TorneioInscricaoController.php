<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TorneioInscricao Controller
 *
 * @property \App\Model\Table\TorneioInscricaoTable $TorneioInscricao
 * @method \App\Model\Entity\TorneioInscricao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TorneioInscricaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Torneios', 'Alunos', 'Academias', 'TorneioCategorias'],
        ];
        $torneioInscricao = $this->paginate($this->TorneioInscricao);

        $this->set(compact('torneioInscricao'));
    }

    /**
     * View method
     *
     * @param string|null $id Torneio Inscricao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $torneioInscricao = $this->TorneioInscricao->get($id, [
            'contain' => ['Torneios', 'Alunos', 'Academias', 'TorneioCategorias'],
        ]);

        $this->set(compact('torneioInscricao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $torneioInscricao = $this->TorneioInscricao->newEmptyEntity();
        if ($this->request->is('post')) {
            $torneioInscricao = $this->TorneioInscricao->patchEntity($torneioInscricao, $this->request->getData());
            if ($this->TorneioInscricao->save($torneioInscricao)) {
                $this->Flash->success(__('The torneio inscricao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneio inscricao could not be saved. Please, try again.'));
        }
        $torneios = $this->TorneioInscricao->Torneios->find('list', ['limit' => 200])->all();
        $alunos = $this->TorneioInscricao->Alunos->find('list', ['limit' => 200])->all();
        $academias = $this->TorneioInscricao->Academias->find('list', ['limit' => 200])->all();
        $torneioCategorias = $this->TorneioInscricao->TorneioCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('torneioInscricao', 'torneios', 'alunos', 'academias', 'torneioCategorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Torneio Inscricao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $torneioInscricao = $this->TorneioInscricao->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $torneioInscricao = $this->TorneioInscricao->patchEntity($torneioInscricao, $this->request->getData());
            if ($this->TorneioInscricao->save($torneioInscricao)) {
                $this->Flash->success(__('The torneio inscricao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The torneio inscricao could not be saved. Please, try again.'));
        }
        $torneios = $this->TorneioInscricao->Torneios->find('list', ['limit' => 200])->all();
        $alunos = $this->TorneioInscricao->Alunos->find('list', ['limit' => 200])->all();
        $academias = $this->TorneioInscricao->Academias->find('list', ['limit' => 200])->all();
        $torneioCategorias = $this->TorneioInscricao->TorneioCategorias->find('list', ['limit' => 200])->all();
        $this->set(compact('torneioInscricao', 'torneios', 'alunos', 'academias', 'torneioCategorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Torneio Inscricao id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $torneioInscricao = $this->TorneioInscricao->get($id);
        if ($this->TorneioInscricao->delete($torneioInscricao)) {
            $this->Flash->success(__('The torneio inscricao has been deleted.'));
        } else {
            $this->Flash->error(__('The torneio inscricao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
