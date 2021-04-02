<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donut extends Model
{
    use HasFactory;
    protected $casts = [
       'toppings' => 'array'
    ];
}
