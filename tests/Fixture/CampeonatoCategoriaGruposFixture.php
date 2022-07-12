<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatoCategoriaGruposFixture
 */
class CampeonatoCategoriaGruposFixture extends TestFixture
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
                'created' => 1657648201,
                'updated' => 1657648201,
                'campeonato_categoria_id' => 1,
                'codigo' => 1,
            ],
        ];
        parent::init();
    }
}
