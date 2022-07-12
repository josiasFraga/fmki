<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TorneiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TorneiosTable Test Case
 */
class TorneiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TorneiosTable
     */
    protected $Torneios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Torneios',
        'app.TorneioInscricao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Torneios') ? [] : ['className' => TorneiosTable::class];
        $this->Torneios = $this->getTableLocator()->get('Torneios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Torneios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TorneiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
