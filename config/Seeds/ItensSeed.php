<?php
use Migrations\AbstractSeed;

/**
 * Itens seed.
 */
class ItensSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
        $data = [
            // [
            //     'name' => $fake->word,
            //     'unit_measurement' => 'ML',
            //     'qtd' => $faker->randomDigit,
            //     'price' => $fake->randomFloat(2, 1, 1000),
            //     'perishable_product' => $faker->boolean,
            //     'expiry_date' => date('Y-m-d', 'now'),
            //     'date_manufacture' => date('Y-m-d', 'now'),
            //     'created' => date('Y-m-d H:i:s'),
            //     'modified' => date('Y-m-d H:i:s'),
            // ]
            [
                'name' => 'Banana',
                'unit_measurement' => 'kg',
                'qtd' => 50,
                'price' => 2.99,
                'perishable_product' => true,
                'expiry_date' => date('Y-m-d'),
                'date_manufacture' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Arroz',
                'unit_measurement' => 'kg',
                'qtd' => 100,
                'price' => 4.50,
                'perishable_product' => true,
                'expiry_date' => date('Y-m-d'),
                'date_manufacture' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Feijão',
                'unit_measurement' => 'kg',
                'qtd' => 80,
                'price' => 5.50,
                'perishable_product' => true,
                'expiry_date' => date('Y-m-d'),
                'date_manufacture' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Carne',
                'unit_measurement' => 'kg',
                'qtd' => 10,
                'price' => 22,90,
                'perishable_product' => true,
                'expiry_date' => date('Y-m-d'),
                'date_manufacture' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pote',
                'unit_measurement' => 'Uni.',
                'qtd' => 50,
                'price' => 29.90,
                'perishable_product' => false,
                'expiry_date' => null,
                'date_manufacture' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ]
        ];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => 'Banana',
                'unit_measurement' => 'kg',
                'qtd' => 50,
                'price' => 2.99,
                'perishable_product' => true,
                'expiry_date' => date('Y-m-d'),
                'date_manufacture' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ];
        }

        $table = $this->table('itens');
        $table->insert($data)->save();
    }
}
