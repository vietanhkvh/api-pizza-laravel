<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    protected $table = "types";
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function product() {
        return $this->hasMany('App\Models\ProductModel', 'type_id', 'id');
    }
}
