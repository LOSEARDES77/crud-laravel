<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employeeNumber';
    public $timestamps = false;

    public function office()
    {
        return $this->belongsTo(Office::class, 'officeCode', 'officeCode');
    }

    public function manager()
    {
        return $this->belongsTo(Employee::class, 'reportsTo', 'employeeNumber');
    }

    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'reportsTo', 'employeeNumber');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'salesRepEmployeeNumber', 'employeeNumber');
    }
}
