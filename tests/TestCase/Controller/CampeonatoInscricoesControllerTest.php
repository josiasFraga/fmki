<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CampeonatoInscricoesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CampeonatoInscricoesController Test Case
 *
 * @uses \App\Controller\CampeonatoInscricoesController
 */
class CampeonatoInscricoesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoInscricoes',
        'app.Campeonatos',
        'app.Alunos',
        'app.Academias',
        'app.CampeonatoCategorias',
        'app.CampeonatoDivisoes',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricoesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricoesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricoesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricoesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricoesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
