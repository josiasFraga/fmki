<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\AcademiasTable $Cidades
 *
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $this->loadModel('Academias');
        $this->loadModel('Alunos');
        $this->loadModel('Campeonatos');
        $this->loadModel('CampeonatoInscricoes');
        $n_academias = $this->Academias->find('all')->where()->count();
        $n_alunos = $this->Alunos->find('all')->where()->count();
        $n_campeonatos = $this->Campeonatos->find('all')->where()->count();
        $last_campeonato = $this->Campeonatos->find('all', [
            'order' => [
                'created DESC'
            ]
        ])->first();

        $id_last_campeonato = 0;
        if ( $last_campeonato != null ){
            $last_campeonato->toArray();
            $id_last_campeonato = $last_campeonato['id'];
        }
        

        $n_inscricoes_last_campeonato =  $this->CampeonatoInscricoes->find('all')->where([
            'campeonato_id' => $id_last_campeonato
        ])->count();

        $this->set(compact('n_academias', 'n_alunos', 'n_campeonatos', 'n_inscricoes_last_campeonato'));
    }
}