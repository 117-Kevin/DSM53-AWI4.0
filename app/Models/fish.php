<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'sex_id',
        'fishbowl_id',
        'kind_id',
        'food_id',
        ];

    
}
