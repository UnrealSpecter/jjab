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
        \DB::table('introductions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Hallo!',
                'subtitle' => 'Wij zijn Stiching Jeugd Juridisch Advies.',
                'text' => 'Wij zijn een stichting gericht op het helpen van jongeren door jongeren.
We bieden jongeren gratis juridische advies. Onze medewerkers een juridische achtergrond. Hiermee
kunnen wij diverse vragen beantwoorden of helpen bij juridische zaken.',
            ),
        ));


    }
}
