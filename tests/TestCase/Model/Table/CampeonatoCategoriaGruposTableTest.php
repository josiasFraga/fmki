<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampeonatoCategoriaGruposTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampeonatoCategoriaGruposTable Test Case
 */
class CampeonatoCategoriaGruposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampeonatoCategoriaGruposTable
     */
    protected $CampeonatoCategoriaGrupos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoCategoriaGrupos',
        'app.CampeonatoCategorias',
        'app.CampeonatoCategoriaGrupoGraduacoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CampeonatoCategoriaGrupos') ? [] : ['className' => CampeonatoCategoriaGruposTable::class];
        $this->CampeonatoCategoriaGrupos = $this->getTableLocator()->get('CampeonatoCategoriaGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CampeonatoCategoriaGrupos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoCategoriaGruposTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoCategoriaGruposTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
