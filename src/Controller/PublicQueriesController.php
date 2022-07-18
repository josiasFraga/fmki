<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\View\JsonView;


class PublicQueriesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: *');
        $this->Authentication->allowUnauthenticated(['index', 'academias', 'academia', 'aluno']);
        
        $this->Authorization->skipAuthorization();
    }

    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function index()
    {
        debug('Funcionando');
        die();
    }

    public function academias()
    {
        $this->request->allowMethod(['get']);
        $this->loadModel('Academias');
        $academias = $this->Academias->find('all',[
            'fields' => [
                'Academias.id',
                'Academias.nome',
                'Academias.logo',
                'Academias.img_dir'
            ],
            'order' => [
                'Academias.nome'
            ]
        ])->toArray();
        //->contain(['Cidades']);
        

        if ( isset($academias) && count($academias) > 0 ) {

            foreach( $academias as $key => $academia){
                $academias[$key]['_logo'] = "http://app.fmki.com.br/img/academias/logo/".$academia['img_dir']."/square_".$academia['logo'];
            }
        }
        
        $json = [
            'status' => 'ok',
            'items' => $academias
        ];

        $this->set(compact('json'));
        $this->viewBuilder()->setOption('serialize', 'json');
    }

    public function academia()
    {
        $this->request->allowMethod(['get']);

        $id = $this->request->getQuery('id');
        if ( $id == null ){
            $json = [
                'status' => 'error',
                'message' => 'ID não informado'
            ];
            $this->set(compact('json'));
            $this->viewBuilder()->setOption('serialize', 'json');
        }

        $this->loadModel('Academias');
        $academia = $this->Academias->get($id,[
            'contain' => [
                'Cidades',
                'Alunos' => ['Graduacoes']
            ],
        ]);
        //->contain(['Cidades']);
        $academia->_logo = "http://app.fmki.com.br/img/academias/logo/".$academia->img_dir."/".$academia->logo;

        if ( isset($academia->alunos) && count($academia->alunos) > 0 ) {
            $alunos = [];
            foreach( $academia->alunos as $key => $aluno){
                $alunos[] = [
                    'id' => $aluno->id,
                    'nome' => $aluno->nome,
                    'graduaco' => $aluno->graduaco,
                ];
            }
            $academia->alunos = $alunos;
        }
        
        $json = [
            'status' => 'ok',
            'items' => $academia
        ];

        $this->set(compact('json'));
        $this->viewBuilder()->setOption('serialize', 'json');
    }

    public function aluno()
    {
        $this->request->allowMethod(['get']);

        $id = $this->request->getQuery('id');
        if ( $id == null ){
            $json = [
                'status' => 'error',
                'message' => 'ID não informado'
            ];
            $this->set(compact('json'));
            $this->viewBuilder()->setOption('serialize', 'json');
        }

        $this->loadModel('Alunos');
        $aluno = $this->Alunos->get($id,[
            'fields' => [
                'Alunos.id',
                'Alunos.academia_id',
                'Alunos.graduacao_id',
                'Alunos.nome',
                'Alunos.sexo',
                'Alunos.foto',
                'Alunos.img_dir',
                'Alunos.sexo',
                'Graduacoes.titulo',
                'Graduacoes.cor_hex',
                'Cidades.name',
                'Cidades.uf',
                'Academias.nome',
                'Academias.sensei',
                'Academias.estilo'
            ],
            'contain' => [
                'Cidades',
                'Graduacoes',
                'Academias'
            ],
        ]);
        //->contain(['Cidades']);
        $aluno->_foto = "http://app.fmki.com.br/img/alunos/foto/".$aluno->img_dir."/".$aluno->foto;

        
        $json = [
            'status' => 'ok',
            'items' => $aluno
        ];

        $this->set(compact('json'));
        $this->viewBuilder()->setOption('serialize', 'json');
    }

   
}
