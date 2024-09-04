<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'product_name',
        'img_product',
        'brand_id',
        'price',
        'product_detail',
        'quantity',
        'Product_date(date)',
        'Product_view',
        'numberOfSale',
    ];
}