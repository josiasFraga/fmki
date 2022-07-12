<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatoCategoriaGrupoGraduacoesFixture
 */
class CampeonatoCategoriaGrupoGraduacoesFixture extends TestFixture
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
                'created' => 1657648208,
                'modified' => 1657648208,
                'campeonato_categoria_grupo_id' => 1,
                'graduacao_id' => 1,
            ],
        ];
        parent::init();
    }
}
