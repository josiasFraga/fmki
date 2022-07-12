<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatoDivisoesFixture
 */
class CampeonatoDivisoesFixture extends TestFixture
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
                'created' => 1657633603,
                'modified' => 1657633603,
                'limite_min_peso' => 1,
                'limite_max_peso' => 1,
            ],
        ];
        parent::init();
    }
}
