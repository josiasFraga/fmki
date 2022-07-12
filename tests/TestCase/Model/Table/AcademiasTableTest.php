<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademiasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademiasTable Test Case
 */
class AcademiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademiasTable
     */
    protected $Academias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Academias',
        'app.Cidades',
        'app.TorneioInscricao',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Academias') ? [] : ['className' => AcademiasTable::class];
        $this->Academias = $this->getTableLocator()->get('Academias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Academias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AcademiasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AcademiasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
