<?php

use Illuminate\Database\Seeder;

class ExplanationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('explanations')->delete();
        
        \DB::table('explanations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Arbeidsrecht',
                'subtitle' => 'Wanneer heb ik te maken met arbeidsrecht?',
            'description' => 'Je hebt te maken met arbeidsrecht wanneer je aan het werk bent voor een werkgever. Het kan ook zijn dat je ziek bent en hierdoor (tijdelijk) niet aan het werk kunt.',
                'video' => NULL,
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-31 12:55:48',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Zorg',
                'subtitle' => 'Welke juridische vragen zou je kunnen hebben zorg?',
                'description' => 'Je zou kunnen denken aan problemen met je zorgverzekering. Je krijgt iets niet vergoed en je begrijpt niet waarom. Of je woont in een zorginstelling en je indicatie wordt niet verlengt. Met al deze vragen kunnen wij je verder helpen.',
                'video' => NULL,
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-31 12:52:43',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Ondernemers',
                'subtitle' => 'Plannen om een bedrijf te starten?',
                'description' => 'Heb je plannen om je eigen bedrijf te beginnen, maar weet je niet waarmee je te maken hebt?
of wil je een vergunning aan vragen maar weet je niet hoe? Dan kun je bij ons terecht met je vragen.',
                'video' => NULL,
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-31 12:49:41',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Huurrecht',
                'subtitle' => 'Wat is huurrecht?',
                'description' => 'Woon je op kamers of woon je in een huurhuis? Alles met betrekking tot de overeenkomst tussen jou en je huurbaas valt onder het huurrecht.',
                'video' => NULL,
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-31 12:47:40',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Belasting',
                'subtitle' => 'Wat is belastingaangifte?',
                'description' => 'Een aangifte die je jaarlijks doet bij de belastingdienst. Veel jongeren vergeten het te doen, maar je kan geld
ontvangen van de overheid. Zelfs nog van 4 jaar geleden!',
                'video' => NULL,
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-11-01 14:28:01',
            ),
        ));
        
        
    }
}