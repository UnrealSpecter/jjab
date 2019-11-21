<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ContactsTableSeeder::class);
        // $this->call(QuotesTableSeeder::class);
        // $this->call(EmployeesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ExplanationsTableSeeder::class);
        $this->call(IntroductionsTableSeeder::class);
        $this->call(ExamplesTableSeeder::class);
    }
}
