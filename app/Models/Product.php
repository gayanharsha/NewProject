<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'oraginal_price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'status',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
