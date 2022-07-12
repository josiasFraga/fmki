<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CampeonatoInscricaoController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CampeonatoInscricaoController Test Case
 *
 * @uses \App\Controller\CampeonatoInscricaoController
 */
class CampeonatoInscricaoControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CampeonatoInscricao',
        'app.Campeonatos',
        'app.Alunos',
        'app.Academias',
        'app.CampeonatoCategorias',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricaoController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricaoController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricaoController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricaoController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CampeonatoInscricaoController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
