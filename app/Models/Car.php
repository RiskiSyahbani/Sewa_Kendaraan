<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tipe() {
        return $this->belongsTo(Tipe::class, 'tipe_id', 'id');
    }

    public function boking() {
        return $this->hasMany(Boking::class, 'car_id', 'id');
    }
}
