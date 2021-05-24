<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "products";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'type_id',
        'image',
    ];
}
