<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['tipodoc', 'numdoc', 'docident','fecexp',
'id_expmuni', 'nombres', 'priapelli', 'segapellido',
'genero', 'fecnacimiento', 'estrato', 'id_cursos', 'id_muni_nac'];
    use HasFactory;
}

