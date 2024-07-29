<?php

namespace Database\Seeders;

use App\Models\Matricula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
        $matricula = new Matricula();
        $matricula->fecha='2024-07-28';
        $matricula->estado='ACTIVO';
        $matricula->estudiante_id=1;
        $matricula->curso_id=1;
        $matricula->periodo_id=1;
        $matricula->usuario_id=1;
        $matricula->save();  
        
        $matricula1 = new Matricula();
        $matricula1->fecha='2024-07-28';
        $matricula1->estado='ACTIVO';
        $matricula1->estudiante_id=2;
        $matricula1->curso_id=1;
        $matricula1->periodo_id=1;
        $matricula1->usuario_id=1;
        $matricula1->save(); 

        $matricula2 = new Matricula();
        $matricula2->fecha='2024-07-28';
        $matricula2->estado='ACTIVO';
        $matricula2->estudiante_id=3;
        $matricula2->curso_id=1;
        $matricula2->periodo_id=1;
        $matricula2->usuario_id=1;
        $matricula2->save();       

        
    }
}
