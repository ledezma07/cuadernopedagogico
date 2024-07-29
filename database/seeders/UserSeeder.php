<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        $usuario = new User();
        $usuario->name='Gonzalo Richard Ledezma Quispe';
        $usuario->email='lezma.07@gmail.com';
        $usuario->password='12345678';
        $usuario->save();
        
        $usuario1 = new User();
        $usuario1->name='Juan Carlos Lopez Argote';
        $usuario1->email='jcarlos.08@gmail.com';
        $usuario1->password='23456789';
        $usuario1->save();

        $usuario3 = new User();
        $usuario3->name='Maria del Carmen Rojas Aguilar';
        $usuario3->email='madelca.09@gmail.com';
        $usuario3->password='34567891';
        $usuario3->save();
    }
}
