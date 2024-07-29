<?php

namespace Database\Seeders;

use App\Models\Asignacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asignaciones = new Asignacione();
        $asignaciones->fecha='2024-07-28';
        $asignaciones->periodo_id=1;   
        $asignaciones->docente_id=1;
        $asignaciones->curso_id=1;
        $asignaciones->usuario_id=1;
        $asignaciones->save(); 
/*
        $asignaciones2 = new Asignacione();
        $asignaciones2->fecha='2024-07-28';
        $asignaciones2->periodo_id=1;   
        $asignaciones2->docente_id=2;
        $asignaciones2->curso_id=3;
        $asignaciones2->usuario_id=1;
        $asignaciones2->save(); 

        $asignaciones3 = new Asignacione();
        $asignaciones3->fecha='2024-07-28';
        $asignaciones3->periodo_id=1;   
        $asignaciones3->docente_id=3;
        $asignaciones3->curso_id=4;
        $asignaciones3->usuario_id=1;
        $asignaciones3->save(); 

        $asignaciones4 = new Asignacione();
        $asignaciones4->fecha='2024-07-28';
        $asignaciones4->periodo_id=1;   
        $asignaciones4->docente_id=4;
        $asignaciones4->curso_id=5;
        $asignaciones4->usuario_id=1;
        $asignaciones4->save(); */
    }
}
