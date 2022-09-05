<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Docente extends Model
{
    protected $fillable = ['nombre', 'apellido', 'titulouniv', 'edad', 'fecha','imagen','documento', 'id_curso'];
    use HasFactory;

    public function subjects(){
        return $this->belongsTo(Subject::class);
    }
}
