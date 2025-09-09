<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'brand',
        'product_warranty',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
