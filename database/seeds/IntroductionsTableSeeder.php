<?php

use Illuminate\Database\Seeder;

class IntroductionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('introductions')->delete();
        
        \DB::table('introductions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Hallo!',
                'subtitle' => 'Wij zijn Stiching Jeugd Juridisch Advies Bureau',
                'text' => 'Wij zijn een stichting gericht op het gratis helpen van jongeren met juridische vragen in de breedste zin van het woord.',
                'created_at' => NULL,
                'updated_at' => '2019-10-24 12:39:33',
            ),
        ));
        
        
    }
}