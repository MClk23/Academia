<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['tipodoc', 'numdoc', 'docident','fecexp', 'exppais',
'expdepa', 'expmuni', 'nombres', 'priapelli', 'segapellido',
'genero', 'fecnacimiento', 'paisnac', 'depnac', 'muninac', 'estrato', 'id_cursos', 'id_muni_nac'];
    use HasFactory;
}

