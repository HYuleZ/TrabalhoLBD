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
                'cpf' => 'Lorem ips',
                'nome' => 'Lorem ipsum dolor sit amet',
                'sobrenome' => 'Lorem ipsum dolor sit amet',
                'nascimento' => '2021-11-10',
                'email' => 'Lorem ipsum dolor sit amet',
                'created' => 1636578701,
                'modified' => '2021-11-10 21:11:41',
            ],
        ];
        parent::init();
    }
}
