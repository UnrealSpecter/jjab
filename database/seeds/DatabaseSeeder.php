<?php

use Illuminate\Database\Seeder;
use App\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);


        Contact::create([
            'PhoneNumber'        => '31622654017',
            'Email'        => 'renda.wesley@gmail.com',
            'StreetName'          => 'Baander',
            'HouseNumber'             => '5',
            'PostalCode'            => '7811HH',
            'Residence'             => 'Emmen',
        ])->save();
    }
}
