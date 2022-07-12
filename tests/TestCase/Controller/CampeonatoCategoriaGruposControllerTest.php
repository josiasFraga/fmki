<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CampeonatoCategoriaGruposController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CampeonatoCategoriaGruposController Test Case
 *
 * @uses \App\Controller\CampeonatoCategoriaGruposController
 */
class CampeonatoCategoriaGruposControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGruposController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGruposController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGruposController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGruposController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CampeonatoCategoriaGruposController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
