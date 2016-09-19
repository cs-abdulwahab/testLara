<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table="vehicles";

    public $timestamps = false;
    public function getOwner(){

        return $this->belongsTo(Employee::class,'employee_id');
    }


}
