<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Souhait extends Model
{
    protected $fillable = ['user_id', 'souhait_name', 'price', 'progress'];
}

