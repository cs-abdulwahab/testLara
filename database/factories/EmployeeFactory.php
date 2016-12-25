<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Department;
use App\Employee;



$factory->define(Employee::class, function (Generator $faker) {
    return [
        'ename' => $faker->name,
        'username' => $faker->safeEmail,
    ];
});




