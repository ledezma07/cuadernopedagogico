<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class);    
    }
    public function trimestres()
    {
        return $this->hasMany(Curso::class);    
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);    
    }
    public function asignaciones()
    {
        return $this->hasMany(Asignacione::class);    
    }


}
