<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Categorias extends AbstractMigration
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
        $table = $this->table('categorias');

        $table->addColumn('livro_id', 'integer');
        $table->addColumn('menu_id', 'integer');
        $table->addColumn('usuario_id', 'integer');

        $table->addColumn('paginas_lidas', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('tipo', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 30,
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
