<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Usuarios extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this-> table('usuarios');

        $table->addColumn('cpf', 'string', [
            'null' => false,
            'limit' => 11,
        ]);
        $table->addColumn('nome', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->addColumn('sobrenome', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->addColumn('nascimento', 'date');

        $table->addColumn('email', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP'
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true
        ]);

        $table->create();
    }
}
