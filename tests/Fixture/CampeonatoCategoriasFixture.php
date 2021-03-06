<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatoCategoriasFixture
 */
class CampeonatoCategoriasFixture extends TestFixture
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
                'created' => 1657891663,
                'modified' => 1657891663,
                'titulo' => 'Lorem ipsum dolor sit amet',
                'categoria' => 'Lorem ipsum dolor sit amet',
                'limite_min_idade' => 1,
                'limite_max_idade' => 1,
                'limite_min_peso' => 1,
                'limite_max_peso' => 1,
                'limite_min_altura' => 1,
                'limite_max_altura' => 1,
            ],
        ];
        parent::init();
    }
}
