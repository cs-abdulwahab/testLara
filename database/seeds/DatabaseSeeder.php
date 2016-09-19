<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(UsersTableSeeder::class);
        $this->call(departmentsTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(vehicleSeeder::class);


    }
}
