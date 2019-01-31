<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('categorias')
            ->addColumn('titulo', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('paginas')
            ->addColumn('titulo', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('conteudo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('categoria_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('categorias')->drop()->save();
        $this->table('paginas')->drop()->save();
    }
}
