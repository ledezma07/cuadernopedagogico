<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trimestre;

class TrimestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trimestre1 = new Trimestre();
        $trimestre1->trimestre_inicio ='2024-02-05';
        $trimestre1->trimestre_fin='2024-05-10';
        $trimestre1->est_trimestre='FINALIZADO';
        $trimestre1->descripcion='El trimestre finalizo sin ningun contratiempo';
        $trimestre1->periodo_id=1;
        $trimestre1->save();

        $trimestre2 = new Trimestre();
        $trimestre2->trimestre_inicio ='2024-05-13';
        $trimestre2->trimestre_fin='2024-08-30';
        $trimestre2->est_trimestre='ACTIVO';
        $trimestre2->descripcion='El trimestre se encuantra activo-receso academico';
        $trimestre2->periodo_id=1;
        $trimestre2->save();

        $trimestre3 = new Trimestre();
        $trimestre3->trimestre_inicio ='2024-09-02';
        $trimestre3->trimestre_fin='2024-12-10';
        $trimestre3->est_trimestre='FALTA';
        $trimestre3->descripcion='El trimestre aun no inicia';
        $trimestre3->periodo_id=1;
        $trimestre3->save();
            
    }
}
