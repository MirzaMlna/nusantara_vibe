<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'price',
        'stock',
        'is_active',
        'dimensions',
    ];

    protected $casts = [
        'dimensions' => 'array', // Cast dimensions sebagai array
        'is_active' => 'boolean', // Cast is_active sebagai boolean
    ];
}