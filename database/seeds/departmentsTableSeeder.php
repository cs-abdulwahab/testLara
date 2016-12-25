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

        for ($i = 0; $i < 50 ; $i ++){
            DB::table('cars')->insert([
                'name' => str_random(10),
                'price' => rand(5,10)
            ]);
        }
//        DB::table('departments')->delete();

     /*   Department::all()->each(function ($d){

           $d->delete();

        });*/

        /*$faker = Faker\Factory::create();

        Eloquent::unguard(true);
        factory(Department::class, 300)->create();

        $this->command->info("Department table seeded :)");

        Eloquent::reguard();*/
    }
}
