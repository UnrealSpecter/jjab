<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Renda Blok',
                'title' => 'The Brains',
                'description' => 'Ik ben Renda Blok, 22 jaar en ik kom uit Emmer-Compascuum. Ik hou van mensen helpen. Ik ben direct en eerlijk maar heb begrip voor de problemen van mensen. Niks maakt mij blijer dan iemand stappen zien maken naar een betere toekomst voor zichzelf.',
                'photo' => 'employees/October2019/KD0PtUQL2BTeN2IuZmq4.png',
                'created_at' => '2018-03-07 22:33:00',
                'updated_at' => '2019-10-18 14:39:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Wesley Tabak',
                'title' => 'The Brawns',
                'description' => 'Ik ben Wesley Tabak. Een 19 jarige jurist die nergens voor terugdeinst. Ik leef om mensen te helpen.',
                'photo' => 'employees/October2019/YlrTFRfICldr5TQxArXW.png',
                'created_at' => '2018-03-07 22:34:00',
                'updated_at' => '2019-10-18 14:39:02',
            ),
        ));
        
        
    }
}