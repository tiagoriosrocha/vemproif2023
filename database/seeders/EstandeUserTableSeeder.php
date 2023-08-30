<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Estande;

class EstandeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listaUser = User::all();
        $listaEstande = Estande::all();

        foreach($listaUser as $umUser){
            $AlgunsEstandes = $listaEstande->random(rand(2,$listaEstande->count()-1));
            $umUser->estandes()->attach($AlgunsEstandes);
        }
    }
}
