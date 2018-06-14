<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('quotes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'content' => 'moet kiezen tussen mijn vader en moeder',
                'created_at' => '2018-03-07 22:22:26',
                'updated_at' => '2018-03-07 22:22:26',
            ),
            1 =>
            array (
                'id' => 2,
                'content' => 'open mijn post niet',
                'created_at' => '2018-03-07 22:22:37',
                'updated_at' => '2018-03-07 22:22:37',
            ),
            2 =>
            array (
                'id' => 3,
                'content' => 'heb moeite met mijn games afsluiten \'s avonds',
                'created_at' => '2018-03-07 22:22:46',
                'updated_at' => '2018-03-07 22:23:05',
            ),
            3 =>
            array (
                'id' => 3,
                'content' => 'heb problemen met mijn werkgever',
                'created_at' => '2018-03-07 22:22:46',
                'updated_at' => '2018-03-07 22:23:05',
            ),
        ));

    }
}
