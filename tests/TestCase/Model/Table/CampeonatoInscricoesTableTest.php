<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampeonatoInscricoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampeonatoInscricoesTable Test Case
 */
class CampeonatoInscricoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampeonatoInscricoesTable
     */
    protected $CampeonatoInscricoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoInscricoes',
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
        $config = $this->getTableLocator()->exists('CampeonatoInscricoes') ? [] : ['className' => CampeonatoInscricoesTable::class];
        $this->CampeonatoInscricoes = $this->getTableLocator()->get('CampeonatoInscricoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CampeonatoInscricoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoInscricoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoInscricoesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
