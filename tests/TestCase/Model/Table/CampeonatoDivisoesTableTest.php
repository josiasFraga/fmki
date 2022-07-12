<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampeonatoDivisoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampeonatoDivisoesTable Test Case
 */
class CampeonatoDivisoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampeonatoDivisoesTable
     */
    protected $CampeonatoDivisoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoDivisoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CampeonatoDivisoes') ? [] : ['className' => CampeonatoDivisoesTable::class];
        $this->CampeonatoDivisoes = $this->getTableLocator()->get('CampeonatoDivisoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CampeonatoDivisoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoDivisoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
