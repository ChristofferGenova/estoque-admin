<?php
use Migrations\AbstractMigration;

class CreateCategories extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('categories');
        $table->addColumn('title', 'string', [
            'limit' => 100
        ]);
        $table->addColumn('url', 'string', [
            'limit' => 100
        ]);
        $table->create();
    }
}
