<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fishbowl extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'user_id',
            'spec_id',
            'temp_act',
            'ilumise_act',
            'ph_act',
    ];
}
