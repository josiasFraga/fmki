<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TorneioInscricaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TorneioInscricaoTable Test Case
 */
class TorneioInscricaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TorneioInscricaoTable
     */
    protected $TorneioInscricao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TorneioInscricao',
        'app.Torneios',
        'app.Alunos',
        'app.Academias',
        'app.TorneioCategorias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TorneioInscricao') ? [] : ['className' => TorneioInscricaoTable::class];
        $this->TorneioInscricao = $this->getTableLocator()->get('TorneioInscricao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TorneioInscricao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TorneioInscricaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TorneioInscricaoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
