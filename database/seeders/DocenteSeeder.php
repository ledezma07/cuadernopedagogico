<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $docente1 = new Docente();
        $docente1->ci='1111111';
        $docente1->paterno='LLANOS';
        $docente1->materno='TOLA';
        $docente1->nombres='ROBERTO CARLOS';
        $docente1->titulo='LICENCIADO';
        $docente1->est_docente='ACTIVO';
        $docente1->usuario_id=1;        
        $docente1->save();

        $docente2 = new Docente();
        $docente2->ci='2222222';
        $docente2->paterno='LANUS';
        $docente2->materno='TITO';
        $docente2->nombres='MARIA DE LOS ANGELES';
        $docente2->titulo='LICENCIADO';
        $docente2->est_docente='ACTIVO';
        $docente2->usuario_id=1;        
        $docente2->save();

        $docente3 = new Docente();
        $docente3->ci='3333333';
        $docente3->paterno='LIMA';
        $docente3->materno='TOLA';
        $docente3->nombres='CARLOS';
        $docente3->titulo='LICENCIADO';
        $docente3->est_docente='ACTIVO';
        $docente3->usuario_id=1;        
        $docente3->save();
    }
}
