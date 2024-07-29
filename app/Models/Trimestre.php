<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;
    public function periodos()
    {
        return $this->belongsTo(Periodo::class);    
    }
    public function calificaciones()
    {
        return $this->hasMany(Calificacione::class);    
    }


}
