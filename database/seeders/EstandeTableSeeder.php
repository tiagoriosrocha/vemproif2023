<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Estande;

class EstandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estande::create([
            'hashtag' => '#SejaMaker',
            'titulo' => 'Laboratório Maker',
            'descricao' => 'bla bla bla bla bla...',
            'localizacao' => 'Prédio x 2º andar',
            'texto' => 'bla bla bla bla bla...',
        ]);

        Estande::create([
            'hashtag' => '#Robotizando',
            'titulo' => 'Robótica no contexto de Computação',
            'descricao' => 'bla bla bla bla bla...',
            'localizacao' => 'sala 204',
            'texto' => 'bla bla bla bla bla...',
        ]);

        Estande::create([
            'hashtag' => '#VisãoComputacional',
            'titulo' => 'Computação Gráfica',
            'descricao' => 'bla bla bla bla bla...',
            'localizacao' => 'sala 205',
            'texto' => 'bla bla bla bla bla...',
        ]);
        
        Estande::create([
            'hashtag' => '#criatividade',
            'titulo' => 'Projeto Integrador',
            'descricao' => 'bla bla bla bla bla...',
            'localizacao' => 'sala 206',
            'texto' => 'bla bla bla bla bla...',
        ]);
    }
}
