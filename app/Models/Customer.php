<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'last_name',
    'age',
    'phone',
    'identification_card',
    'restaurant_id',
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }   
}
