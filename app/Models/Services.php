<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Subservices;

class Services extends Model
{
    protected $fillable = ['name', 'description'];
    public function subservices() {
        return $this->hasMany(Subservices::class, 'service_id');
    }
}
