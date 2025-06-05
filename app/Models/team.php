<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $fillable = [
        'icon',
        'name',
        'description',
        'option',
        'post',
    ];
}
