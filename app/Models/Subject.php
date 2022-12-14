<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['nombre' , 'inthoraria'];
    use HasFactory;

    public function docentes(){
        return $this->belongsTo(Docente::class);
    }

    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }
}
