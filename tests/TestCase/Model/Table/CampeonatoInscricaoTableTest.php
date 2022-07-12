<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampeonatoInscricaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampeonatoInscricaoTable Test Case
 */
class CampeonatoInscricaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampeonatoInscricaoTable
     */
    protected $CampeonatoInscricao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoInscricao',
        'app.Campeonatos',
        'app.Alunos',
        'app.Academias',
        'app.CampeonatoCategorias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CampeonatoInscricao') ? [] : ['className' => CampeonatoInscricaoTable::class];
        $this->CampeonatoInscricao = $this->getTableLocator()->get('CampeonatoInscricao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CampeonatoInscricao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoInscricaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoInscricaoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
