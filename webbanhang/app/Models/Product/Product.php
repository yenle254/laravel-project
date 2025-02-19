<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';
    protected $fillable = [
        "name",
        "image",
        "description",
        "price",
        "exp_date",
        "category_id",
        
    ];
    public $timestamps = true;
}
