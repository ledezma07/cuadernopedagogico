<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso1 = new Curso();
        $curso1->nombre='MATEMATICA';
        $curso1->paralelo='A';
        $curso1->estado='LIBRE';
        $curso1->usuario_id=1;
        $curso1->save();

        $curso2 = new Curso();
        $curso2->nombre='MATEMATICA';
        $curso2->paralelo='B';
        $curso2->estado='LIBRE';
        $curso2->usuario_id=1;
        $curso2->save();

        $curso3 = new Curso();
        $curso3->nombre='FISICA';
        $curso3->paralelo='A';
        $curso3->estado='LIBRE';
        $curso3->usuario_id=1;
        $curso3->save();

        $curso4 = new Curso();
        $curso4->nombre='FISICA';
        $curso4->paralelo='B';
        $curso4->estado='LIBRE';
        $curso4->usuario_id=1;
        $curso4->save();

        $curso5 = new Curso();
        $curso5->nombre='QUIMICA';
        $curso5->paralelo='A';
        $curso5->estado='LIBRE';
        $curso5->usuario_id=1;
        $curso5->save();

        $curso6 = new Curso();
        $curso6->nombre='QUIMICA';
        $curso6->paralelo='B';
        $curso6->estado='LIBRE';
        $curso6->usuario_id=1;
        $curso6->save();
    }
}
