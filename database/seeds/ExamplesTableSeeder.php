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
        ));
        
        
    }
}