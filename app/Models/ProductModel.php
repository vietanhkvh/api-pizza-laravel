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

    public function type() {
        return $this->belongsTo('App\Models\TypeModel', 'type_id', 'id');
    }
    public function billDetail() {
        return $this->hasMany('App\Models\BillDetailModel', 'product_id', 'id');
    }
}
