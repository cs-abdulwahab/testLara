<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $table = "rooms";

    protected $fillable = ["name", "strength"];

    public function getNameAttribute($name){

        return ucfirst($name) ;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }


    public $timestamps = false;

}
