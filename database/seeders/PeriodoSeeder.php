<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periodo;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periodo = new Periodo();
        $periodo->periodo_inicio='2024-02-05';
        $periodo->periodo_fin='2024-12-10';
        $periodo->est_periodo='ACTIVO';
        $periodo->descripcion='El periodo actual se encuentra en desarrollo pedagogico';
        $periodo->usuario_id=1;
        $periodo->save();
    }
}
