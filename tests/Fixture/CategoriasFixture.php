<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasFixture
 */
class CategoriasFixture extends TestFixture
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
                'livro_id' => 1,
                'menu_id' => 1,
                'usuario_id' => 1,
                'paginas_lidas' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'created' => 1636579363,
                'modified' => '2021-11-10 21:22:43',
            ],
        ];
        parent::init();
    }
}
