<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('formations')->insert(
            [
                'titre'=>'Laravel',
                'niveau'=>'avancé',
                'description'=>"travailler avec les Controleurs et les Seeders",
                'date_debut_formation'=>'2021-11-02',
                'duree_formation'=>15,
                'prix'=>19.99,
                'image_formations'=>'../../public/image/laravel.jpg'
                
            ]
            );
    }
}
