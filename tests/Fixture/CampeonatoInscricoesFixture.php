<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatoInscricoesFixture
 */
class CampeonatoInscricoesFixture extends TestFixture
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
                'created' => 1657892205,
                'modified' => 1657892205,
                'campeonato_id' => 1,
                'aluno_id' => 1,
                'academia_id' => 1,
                'categoria_id' => 1,
                'divisao_id' => 1,
            ],
        ];
        parent::init();
    }
}
