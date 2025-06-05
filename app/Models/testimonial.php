<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $fillable = [
        'start',
        'name',
        'description',
        'service',
        'add',
    ];
}
