<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    protected $table = "bills";
    public $timestamps = false;
    protected $fillable = [
        'prices',
        'note',
        'date',
        'user_id',
    ];
    public function user() {
        return $this->belongsTo('App\Models\UserModel', 'user_id', 'id');
    }
    public function billDetail() {
        return $this->hasMany('App\Models\BillDetailModel', 'bill_id', 'id');
    }
}
