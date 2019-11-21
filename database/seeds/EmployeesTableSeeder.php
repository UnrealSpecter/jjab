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
                'description' => 'Ik ben Renda Blok, 23 jaar en ik kom uit Emmer-Compascuum. Ik hou van mensen helpen. Ik ben direct en eerlijk, maar heb begrip voor jouw problemen.',
                'photo' => 'employees/October2019/NmRCSK6IqKD2eSVEAuL8.png',
                'created_at' => '2018-03-07 22:33:00',
                'updated_at' => '2019-10-24 14:32:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Wesley Tabak',
                'description' => 'Ik ben Wesley Tabak. Een 19 jarige jurist die nergens voor terugdeinst. Ik leef om mensen te helpen.',
                'photo' => 'employees/October2019/5Z2nCWWf48KyVSudsdeG.png',
                'created_at' => '2018-03-07 22:34:00',
                'updated_at' => '2019-10-24 14:32:17',
            ),
        ));
        
        
    }
}