<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id', // 👈 agrega también esto
    ];

    // 👇 AQUÍ VA (debajo del fillable)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}