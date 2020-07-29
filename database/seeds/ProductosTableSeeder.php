<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Producto::truncate();
        $faker = \Faker\Factory::create();
        // Crear productos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            \App\Producto::create([
                'codigo' => 5,
                'nombre' => $faker->sentence,
                'precio' => 50,
                'descripcion' => $faker->paragraph
            ]);
        }

    }
}
