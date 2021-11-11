<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContaFixture
 */
class ContaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'conta';
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
                'usuario_id' => 1,
                'login' => 'Lorem ipsum dolor sit amet',
                'senha' => 'Lorem ipsum d',
                'created' => 1636578952,
                'modified' => '2021-11-10 21:15:52',
            ],
        ];
        parent::init();
    }
}
