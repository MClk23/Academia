<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    'tipodoc',
    'numdoc',
    'docident',
    'fecexp',
    'id_expmuni',
    'nombres',
    'priapelli',
    'segapellido',
    'genero',
    'fecnacimiento',
    'id_muni_nac',
    'estrato',
    'id_cursos'

];
    use HasFactory;

    public function town(){
        return $this->belongsTo(Town::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }


}


