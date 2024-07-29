<?php

namespace Database\Seeders;

use App\Models\Asignacione;
use App\Models\Docente;
use App\Models\User;
use App\Models\Estudiante;
use App\Models\Periodo;
use App\Models\Trimestre;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        
        $this->call(UserSeeder::class);        
        User::factory(10)->create();      
        Estudiante::factory(10)->create();
        $this->call(DocenteSeeder::class);
        Docente::factory(10)->create();
        $this->call(PeriodoSeeder::class);
        $this->call(TrimestreSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(MatriculaSeeder::class);
        //$this->call(Asignacione::class);       


       // $this->call(PeriodoSeeder::class);
     

    }
}
