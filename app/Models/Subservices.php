<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Services;

class Subservices extends Model
{
    protected $fillable = ['service_id', 'name'];
    public function service() {
        return $this->belongsTo(Services::class);
    }
}
