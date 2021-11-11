<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Livros extends AbstractMigration
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
        $table = $this->table('livros');

        $table->addColumn('nome', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);

        $table->addColumn('autor', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->addColumn('genero', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->addColumn('editora', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 255,
        ]);
        $table->addColumn('ano_publicacao', 'date');

        $table->addColumn('paginas', 'integer', [
            'null' => true
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
