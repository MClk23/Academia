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
        return $this->belongsToMany(Subject::class);
    }
}
