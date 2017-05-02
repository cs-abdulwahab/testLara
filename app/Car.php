<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ["name", "price"];


    public function faculties()
    {
        return $this->belongsToMany(Faculty::class);
    }


}
