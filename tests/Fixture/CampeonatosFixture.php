<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatosFixture
 */
class CampeonatosFixture extends TestFixture
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
                'created' => 1657636179,
                'modified' => 1657636179,
                'nome' => 'Lorem ipsum dolor sit amet',
                'inicio' => '2022-07-12',
                'fim' => '2022-07-12',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'cidade_id' => 1,
            ],
        ];
        parent::init();
    }
}
