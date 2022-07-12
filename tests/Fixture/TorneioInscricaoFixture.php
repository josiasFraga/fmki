<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TorneioInscricaoFixture
 */
class TorneioInscricaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'torneio_inscricao';
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
                'torneio_id' => 1,
                'aluno_id' => 1,
                'academia_id' => 1,
                'categoria_id' => 1,
            ],
        ];
        parent::init();
    }
}
