<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);    
    }

    public function periodos()
    {
        return $this->belongsTo(Periodo::class);    
    }
    public function cursos()
    {
        return $this->belongsTo(Curso::class);    
    }
    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class);    
    }




}
