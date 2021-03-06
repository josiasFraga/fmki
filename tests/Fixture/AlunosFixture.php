<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlunosFixture
 */
class AlunosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'created' => 1657890025,
                'modified' => 1657890025,
                'graduacao_id' => 1,
                'academia_id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'cidade_id' => 1,
                'endereco' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum d',
                'email' => 'Lorem ipsum dolor sit amet',
                'instagram' => 'Lorem ipsum dolor sit amet',
                'facebook' => 'Lorem ipsum dolor sit amet',
                'foto' => '',
                'img_dir' => 'Lorem ipsum dolor sit amet',
                'peso' => 1,
                'altura' => 1,
                'nascimento' => '2022-07-15',
                'sexo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
