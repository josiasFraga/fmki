<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
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
                'created' => 1657974591,
                'modified' => 1657974591,
                'nome' => 'Lorem ipsum dolor sit amet',
                'academia_id' => 1,
                'login' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'role' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'foto' => '',
                'img_dir' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
