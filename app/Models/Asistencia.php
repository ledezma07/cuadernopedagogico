<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    public function docentes()
    {
        return $this->belongsTo(Docente::class);    
    }
    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class);    
    }

    public function trimestres()
    {
        return $this->belongsTo(Trimestre::class);    
    }
}
