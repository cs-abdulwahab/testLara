<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{

    // protected $table = 'faculties';

    protected $fillable = ['name', 'email'];


    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }


}
