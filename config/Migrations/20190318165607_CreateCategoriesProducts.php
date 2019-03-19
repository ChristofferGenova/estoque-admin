<?php
use Migrations\AbstractMigration;

class CreateCategoriesProducts extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('categories_products');
        $table->addColumn('category_id', 'integer');
        $table->addColumn('product_id', 'integer');
        $table->addForeignKey('category_id', 'categories', 'id');
        $table->addForeignKey('product_id', 'products', 'id');
        $table->create();
    }
}
