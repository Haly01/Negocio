<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        "number_table",
        "restaurant_id",
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
