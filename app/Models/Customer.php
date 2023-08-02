<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cuit_cuil',
        'address',
        'phone'
    ];

    public function scopeSearchCustomer($query, $nombre)
    {
        return $query->where('name', 'Like', "%$nombre%");
    }
}
