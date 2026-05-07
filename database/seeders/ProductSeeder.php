<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Máscara chiapaneca',
            'description' => 'Producto artesanal elaborado por artesanos de Chiapa de Corzo ' , 
            'price' => 400,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Blusa bordada',
            'description' => 'Textil tradicional hecho a mano.',
            'price' => 350,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Pulsera artesanal',
            'description' => 'Accesorio artesanal elaborado con materiales locales.',
            'price' => 120,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Toles',
            'description' => 'Pieza artesanal decorativa de jícaras.',
            'price' => 280,
            'category_id' => 3
        ]);
    }
}

