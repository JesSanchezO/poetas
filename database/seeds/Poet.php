<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class insertar_poets extends Seeder
{
   
    public function run()
    {
        DB::table('poet')->insert([
            'firstname' => 'Jessica',
            'surname' => 'Sanchez',
            'address' => 'mi casa',
            'postCode' => '31060',
            'telephoneNumber' => '6141694251'
        ]);
        DB::table('poet')->insert([
            'firstname' => 'Perlita',
            'surname' => 'LaBonita',
            'address' => 'su casa',
            'postCode' => '31060',
            'telephoneNumber' => '6143605880'
        ]);
        DB::table('poet')->insert([
            'firstname' => 'Vic',
            'surname' => 'El Chaparrito Guapo',
            'address' => 'Aldama',
            'postCode' => '31060',
            'telephoneNumber' => '6143648631'
        ]);
        DB::table('poet')->insert([
            'firstname' => 'Dani',
            'surname' => 'Americanista',
            'address' => 'Romanza',
            'postCode' => '31060',
            'telephoneNumber' => '6143037065'
        ]);
        
    }
}