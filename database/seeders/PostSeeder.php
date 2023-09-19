<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post::create([
            'titre'=>'Comment soigner les hemorroides',
            'description'=>'Le traitement des hémorroïdes repose sur 
             des médicaments contre la douleur, pendant 1 à 2 semaines. Dans certains cas, une ligature ou une sclérose des vaisseaux hémorroïdaires distendus, voire une opération chirurgicale, se révèle nécessaire. Les médicaments dits veinotoniques sont également prescrits dans le traitement des crises d’hémorroïdes. La prévention des rechutes repose sur la prévention de la constipation : hydratation suffisante, alimentation riche
             en fibres, activité physique régulière.',
             'photo'=>'maladie.png',
             'category_id'=>2
        ]);
    }
}
