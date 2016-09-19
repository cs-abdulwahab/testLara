<?php


use App\Department;
use App\Employee;
use Illuminate\Database\Seeder;

class departmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('departments')->delete();
     /*   Department::all()->each(function ($d){

           $d->delete();

        });*/


        $faker = Faker\Factory::create();

        Eloquent::unguard(true);
        factory(Department::class, 3)->create();

        $this->command->info("Department table seeded :)");

        Eloquent::reguard();
    }
}
