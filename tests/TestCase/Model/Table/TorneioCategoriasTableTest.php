<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TorneioCategoriasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TorneioCategoriasTable Test Case
 */
class TorneioCategoriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TorneioCategoriasTable
     */
    protected $TorneioCategorias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('TorneioCategorias') ? [] : ['className' => TorneioCategoriasTable::class];
        $this->TorneioCategorias = $this->getTableLocator()->get('TorneioCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TorneioCategorias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TorneioCategoriasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
