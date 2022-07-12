<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GraduacoesFixture
 */
class GraduacoesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'created' => 1657633937,
                'modified' => 1657633937,
                'titulo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
