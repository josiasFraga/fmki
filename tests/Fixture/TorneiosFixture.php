<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TorneiosFixture
 */
class TorneiosFixture extends TestFixture
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
                'created' => 1657549080,
                'modified' => 1657549080,
                'inicio' => '2022-07-11',
                'fim' => '2022-07-11',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => '',
            ],
        ];
        parent::init();
    }
}
