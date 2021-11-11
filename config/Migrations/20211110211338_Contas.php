<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Contas extends AbstractMigration
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
        $table = $this->table('conta');

        $table->addColumn('usuario_id', 'integer');

        $table->addColumn('login', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 100,
        ]);
        $table->addColumn('senha', 'string', [
            'null' => false,
            'limit' => 15,
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
