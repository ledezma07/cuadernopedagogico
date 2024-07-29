<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model
{
    use HasFactory;
    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class);    
    }
    public function users()
    {
        return $this->belongsTo(User::class);    
    }

    public function asignacione()
    {
        return $this->belongsTo(Asignacione::class);    
    }
    public function trimestres()
    {
        return $this->belongsTo(Trimestre::class);    
    }


}
