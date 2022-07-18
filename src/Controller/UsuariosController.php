<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{

    // in src/Controller/UsersController.php
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'logout']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $user = $this->Authentication->getIdentity();
        $usuario = $this->Usuarios->newEmptyEntity();
        $this->Authorization->authorize($usuario);

        $this->paginate = [
            'contain' => ['Academias'],
        ];
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $user = $this->Authentication->getIdentity();
        $usuario = $this->Usuarios->newEmptyEntity();
        $this->Authorization->authorize($usuario);

        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Academias'],
        ]);

        $this->set(compact('usuario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $user = $this->Authentication->getIdentity();
        $usuario = $this->Usuarios->newEmptyEntity();
        $this->Authorization->authorize($usuario);

        $usuario = $this->Usuarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $dados = $this->request->getData();
            $dados['role'] = 'academy';
            $usuario = $this->Usuarios->patchEntity($usuario, $dados);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The record has been saved').'.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record not be saved. Please, try again.'));
        }
        $academias = $this->Usuarios->Academias->find('list', ['limit' => 200])->all();
        $this->set(compact('usuario', 'academias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $user = $this->Authentication->getIdentity();
        $usuario = $this->Usuarios->newEmptyEntity();
        $this->Authorization->authorize($usuario);

        $usuario = $this->Usuarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dados = $this->request->getData();
            unset($dados['role']);
            $usuario = $this->Usuarios->patchEntity($usuario, $dados);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The record has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be updated. Please, try again.'));
        }
        $academias = $this->Usuarios->Academias->find('list', ['limit' => 200])->all();
        $this->set(compact('usuario', 'academias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        $user = $this->Authentication->getIdentity();
        $usuario = $this->Usuarios->newEmptyEntity();
        $this->Authorization->authorize($usuario);
        
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('CakeLte.login');
        $result = $this->Authentication->getResult();
        // If the user is logged in send them away.
        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/dashboard';
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Nome de usuários e/ou senha inválidos!');
        }
    }
    public function logout()
    {
        $this->Authorization->skipAuthorization();
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Usuarios', 'action' => 'login']);
    }
}
