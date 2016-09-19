<?php

use App\Department;
use App\Employee;
use Illuminate\Database\Seeder;


class EmployeeTableSeeder extends Seeder
{
    public function run()
    {


        Eloquent::unguard(true);
        Department::all()->each(
            function ($d) {

                factory(Employee::class, 3)->create([
                    'department_id' => $d->id,
                ]);
                $this->command->info("emp :)" . $d->id);
            });

        $this->command->info("Employee table seeded :)");
        Eloquent::reguard();

    }
}
