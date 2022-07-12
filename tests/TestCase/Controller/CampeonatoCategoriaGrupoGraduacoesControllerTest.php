<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CampeonatoCategoriaGrupoGraduacoesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CampeonatoCategoriaGrupoGraduacoesController Test Case
 *
 * @uses \App\Controller\CampeonatoCategoriaGrupoGraduacoesController
 */
class CampeonatoCategoriaGrupoGraduacoesControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGrupoGraduacoesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGrupoGraduacoesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGrupoGraduacoesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGrupoGraduacoesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGrupoGraduacoesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
