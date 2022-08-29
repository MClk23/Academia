<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['nombre', 'idpais'];
    use HasFactory;

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function towns(){
        return $this->hasMany(Town::class);
    }
}
