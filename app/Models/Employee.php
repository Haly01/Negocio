<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "last_name",
        "age",
        "gender",
        "email",
        "phone",
        "salary",
        'address',
        'identification_card',
        'restaurant_id',
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }   
}
