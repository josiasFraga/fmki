<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable Test Case
 */
class CampeonatoCategoriaGrupoGraduacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable
     */
    protected $CampeonatoCategoriaGrupoGraduacoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoCategoriaGrupoGraduacoes',
        'app.CampeonatoCategoriaGrupos',
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
        $config = $this->getTableLocator()->exists('CampeonatoCategoriaGrupoGraduacoes') ? [] : ['className' => CampeonatoCategoriaGrupoGraduacoesTable::class];
        $this->CampeonatoCategoriaGrupoGraduacoes = $this->getTableLocator()->get('CampeonatoCategoriaGrupoGraduacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CampeonatoCategoriaGrupoGraduacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
