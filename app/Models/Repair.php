<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $fillable =[
        'observations',
        'car_id',
        'domain'
    ];

    public function scopeSearchRepair($query, $domain)
    {
        return $query->where('domain', 'Like', "%$domain%");
    }
}
