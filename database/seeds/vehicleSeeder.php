<?php

use App\Employee;
use App\Vehicle;
use Illuminate\Database\Seeder;

class vehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard(true);

        $this->command->info("Vehicle Seeding please wait...");
        Employee::all()->each(function ($e) {
            factory(Vehicle::class)->times(2)->create(
                [
                    'employee_id' => $e->id,
                ]

            );
        }

        );
        $this->command->info("Vehicle table seeded :)");
        Eloquent::reguard();

    }
}
