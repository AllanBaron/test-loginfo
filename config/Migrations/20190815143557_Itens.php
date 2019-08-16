<?php
use Migrations\AbstractMigration;

class Itens extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('itens');

        // Name
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);

        // Unit of Measurement
        $table->addColumn('unit_measurement', 'string', [
            'default' => null,
            'limit' => 3,
            'null' => false,
        ]);

        // Quantity
        $table->addColumn('qtd', 'integer', [
            'default' => 0,
            'null' => true,
        ]);

        // Price
        $table->addColumn('price', 'decimal', [
            'default' => null,
            'null' => false,
        ]);

        // Perishable Product
        $table->addColumn('perishable_product', 'boolean', [
            'default' => null,
            'null' => true,
        ]);

        // Expiry Date
        $table->addColumn('expiry_date', 'date', [
            'default' => null,
            'null' => false,
        ]);

        // Date of Manufacture
        $table->addColumn('date_manufacture', 'date', [
            'default' => null,
            'null' => false,
        ]);

        // Created Product Date
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        // Modified Product Date
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->create();
    }
}
