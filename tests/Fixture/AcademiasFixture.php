<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AcademiasFixture
 */
class AcademiasFixture extends TestFixture
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
                'created' => 1657578030,
                'modified' => 1657578030,
                'nome' => 'Lorem ipsum dolor sit amet',
                'cidade_id' => 1,
                'endereco' => 'Lorem ipsum dolor sit amet',
                'logo' => 'Lorem ipsum dolor sit amet',
                'img_dir' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum d',
                'facebook' => 'Lorem ipsum dolor sit amet',
                'instagram' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
