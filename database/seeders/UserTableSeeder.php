<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = new Faker();
        $faker->addProvider(new \Faker\Provider\pt_BR\Person($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Company($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Payment($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Address($faker));
        $faker->addProvider(new \Faker\Provider\Internet($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\Text($faker));
        $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));
        $faker->addProvider(new \Faker\Provider\en_US\Text($faker));
        $faker->addProvider(new \Faker\Provider\Lorem($faker));
        
        //crio 10 usuários no banco
        for($i=0; $i<10; $i++){
            $umUsuario = new User();
            $umUsuario->name = $faker->name();
            $umUsuario->email = $faker->unique()->safeEmail();
            $umUsuario->password = Hash::make('password');
            $umUsuario->save();
        }
        
        //cria um usuário pra mim
        $umUsuario = new User();
        $umUsuario->name = "Tiago Rios da Rocha";
        $umUsuario->email = 'tiagoriosrocha@gmail.com';
        $umUsuario->password = Hash::make('password');
        $umUsuario->save();
        
    }
}
