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
                'title' => 'Huisvesting',
                'subtitle' => 'Wat houdt huurrecht precies in?',
                'description' => 'Het huurrecht betreft het samenstel van regels op het gebied van huur. Huur is de overeenkomst waarbij de verhuurder de verplichting op zich neemt aan de huurder een zaak of gedeelte daarvan in gebruik te verstrekken, en de huurder zich verbindt tot een tegenprestatie. Vaak wordt het huurrecht in verband gebracht met de verhuur van huizen of kamers. Het huurrecht is echter ook van toepassing op het huren van een fiets of een auto.',
                'video' => '',
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-08 09:39:08',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Werk & Inkomen',
                'subtitle' => 'Wat houdt huurrecht precies in?',
                'description' => 'Het huurrecht betreft het samenstel van regels op het gebied van huur. Huur is de overeenkomst waarbij de verhuurder de verplichting op zich neemt aan de huurder een zaak of gedeelte daarvan in gebruik te verstrekken, en de huurder zich verbindt tot een tegenprestatie. Vaak wordt het huurrecht in verband gebracht met de verhuur van huizen of kamers. Het huurrecht is echter ook van toepassing op het huren van een fiets of een auto.',
                'video' => '',
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-08 09:39:08',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Zorg',
                'subtitle' => 'Wat houdt huurrecht precies in?',
                'description' => 'Het huurrecht betreft het samenstel van regels op het gebied van huur. Huur is de overeenkomst waarbij de verhuurder de verplichting op zich neemt aan de huurder een zaak of gedeelte daarvan in gebruik te verstrekken, en de huurder zich verbindt tot een tegenprestatie. Vaak wordt het huurrecht in verband gebracht met de verhuur van huizen of kamers. Het huurrecht is echter ook van toepassing op het huren van een fiets of een auto.',
                'video' => '',
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-08 09:39:08',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'School',
                'subtitle' => 'Wat houdt huurrecht precies in?',
                'description' => 'Het huurrecht betreft het samenstel van regels op het gebied van huur. Huur is de overeenkomst waarbij de verhuurder de verplichting op zich neemt aan de huurder een zaak of gedeelte daarvan in gebruik te verstrekken, en de huurder zich verbindt tot een tegenprestatie. Vaak wordt het huurrecht in verband gebracht met de verhuur van huizen of kamers. Het huurrecht is echter ook van toepassing op het huren van een fiets of een auto.',
                'video' => '',
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-08 09:39:08',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'Huurrecht',
                'subtitle' => 'Wat houdt huurrecht precies in?',
                'description' => 'Het huurrecht betreft het samenstel van regels op het gebied van huur. Huur is de overeenkomst waarbij de verhuurder de verplichting op zich neemt aan de huurder een zaak of gedeelte daarvan in gebruik te verstrekken, en de huurder zich verbindt tot een tegenprestatie. Vaak wordt het huurrecht in verband gebracht met de verhuur van huizen of kamers. Het huurrecht is echter ook van toepassing op het huren van een fiets of een auto.',
                'video' => '',
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-08 09:39:08',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'Bemiddeling',
                'subtitle' => 'Wat houdt huurrecht precies in?',
                'description' => 'Het huurrecht betreft het samenstel van regels op het gebied van huur. Huur is de overeenkomst waarbij de verhuurder de verplichting op zich neemt aan de huurder een zaak of gedeelte daarvan in gebruik te verstrekken, en de huurder zich verbindt tot een tegenprestatie. Vaak wordt het huurrecht in verband gebracht met de verhuur van huizen of kamers. Het huurrecht is echter ook van toepassing op het huren van een fiets of een auto.',
                'video' => '',
                'created_at' => '2019-10-07 12:55:00',
                'updated_at' => '2019-10-08 09:39:08',
            ),
        ));


    }
}
