<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->insert(array (
            0 =>
            array (
                'id' => 2,
                'phone_number' => '31622654017',
                'email' => 'renda.wesley@gmail.com',
                'street_name' => 'Baander',
                'house_number' => '5',
                'postal_code' => '7811HH',
                'residence' => 'Emmen',
                'anbi' => null,
                'created_at' => '2018-03-07 22:18:35',
                'updated_at' => '2018-03-07 22:18:35',
            ),
        ));


    }
}
