<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'productCode';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function productLine()
    {
        return $this->belongsTo(ProductLine::class, 'productLine', 'productLine');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'productCode', 'productCode');
    }
}
