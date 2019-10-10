<?php

use Illuminate\Database\Seeder;

class ExamplesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('examples')->delete();

        \DB::table('examples')->insert(array (
            0 =>
            array (
                'id' => 1,
                'question' => 'Het internet bij mij thuis werkte niet, mijn huurbaas wou hier niets aan doen. Help?',
                'explanation_id' => 1,
                'created_at' => '2019-10-10 13:21:52',
                'updated_at' => '2019-10-10 13:21:52',
            ),
            1 =>
            array (
                'id' => 2,
                'question' => 'Het internet bij mij thuis werkte niet, mijn huurbaas wou hier niets aan doen. Help?',
                'explanation_id' => 1,
                'created_at' => '2019-10-10 13:21:52',
                'updated_at' => '2019-10-10 13:21:52',
            ),
            2 =>
            array (
                'id' => 3,
                'question' => 'Het internet bij mij thuis werkte niet, mijn huurbaas wou hier niets aan doen. Help?',
                'explanation_id' => 1,
                'created_at' => '2019-10-10 13:21:52',
                'updated_at' => '2019-10-10 13:21:52',
            ),
            3 =>
            array (
                'id' => 4,
                'question' => 'Het internet bij mij thuis werkte niet, mijn huurbaas wou hier niets aan doen. Help?',
                'explanation_id' => 2,
                'created_at' => '2019-10-10 13:21:52',
                'updated_at' => '2019-10-10 13:21:52',
            ),
            4 =>
            array (
                'id' => 5,
                'question' => 'Het internet bij mij thuis werkte niet, mijn huurbaas wou hier niets aan doen. Help?',
                'explanation_id' => 2,
                'created_at' => '2019-10-10 13:21:52',
                'updated_at' => '2019-10-10 13:21:52',
            ),
            5 =>
            array (
                'id' => 6,
                'question' => 'Het internet bij mij thuis werkte niet, mijn huurbaas wou hier niets aan doen. Help?',
                'explanation_id' => 2,
                'created_at' => '2019-10-10 13:21:52',
                'updated_at' => '2019-10-10 13:21:52',
            ),
        ));


    }
}
