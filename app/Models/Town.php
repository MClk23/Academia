<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = ['nombre', 'iddepa'];
    use HasFactory;

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function states(){
        return $this->belongsTo(States::class);
    }
}
