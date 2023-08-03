<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable =[
        'domain',
        'model',
        'year',
        'customer_id'
    ];


    public function scopeSearchCar($query, $patente)
    {
        return $query->where('domain', 'Like', "%$patente%");
    }
}
