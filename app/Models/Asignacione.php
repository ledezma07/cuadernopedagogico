<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacione extends Model
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
    public function docentes()
    {
        return $this->belongsTo(Docente::class);    
    }

    public function cursos()
    {
        return $this->belongsTo(Curso::class);    
    }
    public function calificaciones()
    {
        return $this->hasMany(Calificacione::class);    
    }

}
