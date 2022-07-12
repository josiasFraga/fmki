<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TorneioCategoriasFixture
 */
class TorneioCategoriasFixture extends TestFixture
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
                'created' => 1657549025,
                'modified' => 1657549025,
                'titulo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
