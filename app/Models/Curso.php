<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //añadienod permiso para manipular campos de la tabla
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'duracion'];
    use HasFactory;

    public function subject(){
        return $this->hasMany(Subject::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function docente(){
        return $this->hasMany(Docente::class);
    }

}
