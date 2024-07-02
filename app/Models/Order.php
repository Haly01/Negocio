<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "date",
        "hour",
        "restaurant_id",
        "employee_id",
        "customer_id",
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
