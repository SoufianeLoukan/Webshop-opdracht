<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'platform',
        'region',
        'availability',
        'delivery',
        'price',
        'non_discounted_price',
        'publisher',
        'developer',
        'release_date',
        'description',
        'genre',
        'image_url'
    ];
}
