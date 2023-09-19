<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['kyste','fibrome','hemorroide','perte blanche'];
        foreach ($categories as $categorie) {
            category::create([
                'libele'=>$categorie
            ]);
        }
    }
}
