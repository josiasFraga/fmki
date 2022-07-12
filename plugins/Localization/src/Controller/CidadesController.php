<?php
namespace Localization\Controller;
use Localization\Controller\AppController;


class CidadesController extends AppController
{

    /**
     * Index method
     *
     * @param string|null $id State id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function index($id = null)
    {
        $this->viewBuilder()->setLayout('Localization.ajax');
        $this->loadModel('Cidades');

        $cidades = $this->Cidades->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->where(['estado_id' => $id]);

        $this->set('cidades', $cidades);
        $this->set('_serialize', ['cidades']);
    }

    /**
     * View method
     *
     * @param string|null $id City id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('Localization.ajax');

        $cidade = $this->Cidades->get($id);

        $this->set('cidade', $cidade);
        $this->set('_serialize', ['cidade']);
    }
}
