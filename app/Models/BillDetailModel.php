<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetailModel extends Model
{
    protected $table = "detail_bill";
    public $timestamps = false;
    protected $fillable = [
        'quantity',
        'prices',
        'product_id',
        'bill_id',
    ];
    public function product() {
        return $this->belongsTo('App\Models\ProductModel', 'product_id', 'id');
    }
    public function bill() {
        return $this->belongsTo('App\Models\BillModel', 'bill_id', 'id');
    }
}
