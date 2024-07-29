<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class);    
    }
    public function asignaciones()
    {
        return $this->hasMany(Asignacione::class);    
    }
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);    
    }
}
