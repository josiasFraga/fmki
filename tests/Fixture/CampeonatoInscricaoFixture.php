<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampeonatoInscricaoFixture
 */
class CampeonatoInscricaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'campeonato_inscricao';
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
                'created' => 1657549060,
                'modified' => 1,
                'campeonato_id' => 1,
                'aluno_id' => 1,
                'academia_id' => 1,
                'categoria_id' => 1,
            ],
        ];
        parent::init();
    }
}
