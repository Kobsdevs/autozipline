<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'release_year', 'body_type', 'engine' , 'horsepower', 'fuel_consumption', 'description', 'brand_id'
    ];
}
