<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'price',
        'stock',
        'is_active',
        'is_featured',
        'dimensions',
    ];

    protected $casts = [
        'dimensions' => 'array', // Cast dimensions sebagai array
        'is_active' => 'boolean', // Cast is_active sebagai boolean
        'is_featured' => 'boolean', // Cast is_active sebagai boolean
    ];
}