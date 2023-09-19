<?php

namespace Database\Seeders;

use App\Models\praticien;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=>'Sow',
            'prenom'=>'anatou',
            'email'=>' anatou@gmail.com',
            'password'=>Hash::make('password'),
            'phone1'=>70556622,
        ]);

       $praticien = User::create([
            'nom'=>'zongo',
            'prenom'=>'alidou',
            'password'=>Hash::make('password'),
            'phone1'=>78556622,
            'phone2'=>66552200,
        ]);
        praticien::create([
            'description'=>'Je soigne toutes sorte de maladies à base de Feuilles et de plantes naturelles
            .',
            'localisation'=>'Secteur 2 , Koudougou',
            'photo'=>'tradi.png',
            'user_id'=>$praticien->id
        ]);
    }
}
