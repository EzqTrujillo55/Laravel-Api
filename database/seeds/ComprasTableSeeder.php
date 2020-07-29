<?php

use Illuminate\Database\Seeder;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Compra::truncate();
        $faker = \Faker\Factory::create();
        // Crear productos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            \App\Compra::create([
                'descripcion' => $faker->paragraph,
                'valor'=>50
            ]);
        }
    }
}
