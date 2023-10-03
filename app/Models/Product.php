<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillabel = ['product_id', 'category_id', 'product_name', 'description', 'image', 'price', 'view_count'];
}