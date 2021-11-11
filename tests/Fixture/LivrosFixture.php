<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LivrosFixture
 */
class LivrosFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'autor' => 'Lorem ipsum dolor sit amet',
                'genero' => 'Lorem ipsum dolor sit amet',
                'editora' => 'Lorem ipsum dolor sit amet',
                'ano_publicacao' => '2021-11-10',
                'paginas' => 1,
                'created' => 1636576179,
                'modified' => '2021-11-10 20:29:39',
            ],
        ];
        parent::init();
    }
}
