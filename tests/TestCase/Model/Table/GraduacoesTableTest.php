<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GraduacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GraduacoesTable Test Case
 */
class GraduacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GraduacoesTable
     */
    protected $Graduacoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Graduacoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Graduacoes') ? [] : ['className' => GraduacoesTable::class];
        $this->Graduacoes = $this->getTableLocator()->get('Graduacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Graduacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GraduacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
