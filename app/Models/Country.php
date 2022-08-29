<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model

{
    protected $fillable = ['nombre'];
    use HasFactory;

    public function country(){
        return $this->hasMany(States::class);
    }
}
