<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'Laptop de alto rendimiento',
            'price' => 15000,
            'stock' => 10,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Playera',
            'description' => 'Playera de algodón',
            'price' => 250,
            'stock' => 50,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Sofá',
            'description' => 'Sofá cómodo',
            'price' => 5000,
            'stock' => 5,
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Audífonos',
            'description' => 'Audífonos inalámbricos',
            'price' => 800,
            'stock' => 20,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Pantalón',
            'description' => 'Pantalón de mezclilla',
            'price' => 600,
            'stock' => 30,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Mesa',
            'description' => 'Mesa de madera',
            'price' => 2000,
            'stock' => 8,
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Celular',
            'description' => 'Smartphone',
            'price' => 9000,
            'stock' => 15,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Sudadera',
            'description' => 'Sudadera deportiva',
            'price' => 700,
            'stock' => 25,
            'category_id' => 2,
        ]);
    }
}
