<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    use HasFactory;

    protected $primaryKey = 'productLine';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'productLine', 'productLine');
    }
}

